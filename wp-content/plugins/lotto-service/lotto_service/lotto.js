'use strict'

const mariadb = require('mariadb');

const pool = mariadb.createPool({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'showlotto',
    connectionLimit: 5
});

async function check(req, callback) {
    let conn;
    try {
        conn = await pool.getConnection();
        const rows = await conn.query("SELECT A.*,B.LOTTO_NAME FROM SHOWLOTTO.LOTTO_DB A " +
            "INNER JOIN SHOWLOTTO.LOTTO_NAME B ON A.LOTTO_TYPE=B.LOTTO_TYPE " +
            "WHERE ID='" + req.showlotto.lottoType + "' " +
            "AND (A.LOTTO_TYPE<>3 AND A.LOTTO_TYPE<>4 AND A.LOTTO_TYPE<>5 AND NUMBER='" + req.showlotto.lottoBarcode + "'" +
            " OR (A.LOTTO_TYPE=3 AND NUMBER='" + req.showlotto.lottoBarcode.substring(0, 3) + "') " +
            " OR (A.LOTTO_TYPE=4 AND NUMBER='" + req.showlotto.lottoBarcode.substring(3, 6) + "') " +
            " OR (A.LOTTO_TYPE=5 AND NUMBER='" + req.showlotto.lottoBarcode.substring(4, 6) + "') " +
            ")");

        let result = "";
        let message = "";

        if (rows.length <= 0) {
            result = "0";
            message = "ไม่ถูกรางวัลใดๆ";
        } else {
            result = rows[0].LOTTO_TYPE;
            message = rows[0].LOTTO_NAME;
        }

        let jsonout = {
            rewardType: result,
            message: message
        };

        callback(jsonout);
    } catch (err) {
        throw err;
    } finally {
        if (conn) return conn.end();
    }
}

module.exports = {
    check
};