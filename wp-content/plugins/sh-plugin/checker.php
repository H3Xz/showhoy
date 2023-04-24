<!DOCTYPE html>
<html lang="th" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <meta name="HandheldFriendly" content="true">
        <style>
            @font-face {
                font-family: 'K2D';
                font-style: normal;
                font-weight: 400;
                src: local('K2D Regular'), local('K2D-Regular'), url(https://fonts.gstatic.com/s/k2d/v1/J7aTnpF2V0EjZKUsrLc.woff2) format('woff2');
                unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
            }

            body {
                padding-top: 1px !important;
                padding-bottom: 1px !important;
            }

            .btn-danger {
                color: #fff;
                margin: 3px 3px;
            }

            h3 {
                margin-top: 2px!important;
                margin-left: 1px!important;
            }

            aside {
                margin-left: 4px!important;
            }

            .widget-title {
                font-size: 18px;
                margin-bottom: 15px;
                padding-bottom: 0;
            }

            .widget-title span {
                margin: 0 auto;
                text-align: center;
                width: 99%;
                background-color: #289dcc;
                color: #fff;
                padding: 6px 12px;
                display: inline-block;
            }

            div.textwidget {
                width: 240px;
                margin: 0 auto;
            }

            html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,dl,dt,dd,ol,ul,li,fieldset,form,legend,table,caption,tbody,tfoot,thead,th,td {
                border: 1px;
                font: inherit;
                font-size: 100%;
                font-style: inherit;
                font-weight: inherit;
                margin: 0;
                outline: 0;
                padding: 0;
                vertical-align: baseline;
            }

            html {
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }

            article,aside,details,figcaption,figure,footer,header,main,nav,section {
                display: block;
            }

            body,button,input,select,textarea {
                color: #444444;
                font: 16px 'K2D',serif;
                line-height: 1.6;
                word-wrap: break-word;
            }

            h1,h2,h3,h4,h5,h6 {
                padding-bottom: 18px;
                color: #333333;
                font-weight: normal;
                font-family: 'K2D',sans-serif;
            }

            h1 {
                font-size: 42px;
                line-height: 1.2;
            }

            h2 {
                font-size: 38px;
                line-height: 1.2;
            }

            h3 {
                font-size: 34px;
                line-height: 1.2;
            }

            h4 {
                font-size: 30px;
                line-height: 1.2;
            }

            h5 {
                font-size: 26px;
                line-height: 1.2;
            }

            h6 {
                font-size: 22px;
                line-height: 1.2;
            }

            p {
                line-height: 1.6;
                margin-bottom: 15px;
                font-family: 'K2D',serif;
                font-size: 15px;
            }

            strong {
                font-weight: bold;
            }

            cite,em,i {
                font-style: italic;
            }

            .widget select {
                border: 1px solid #DDDDDD;
                color: #777777;
                padding: 2px;
                width: 99%;
            }

            html {
                font-family: K2D;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }

            body {
                font-family: K2D;
                margin: 0;
            }

            article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary {
                font-family: K2D;
                display: block;
            }

            audio,canvas,progress,video {
                display: inline-block;
                vertical-align: baseline;
            }

            audio:not([controls]) {
                display: none;
                height: 0;
            }

            [hidden],template {
                display: none;
            }

            a {
                background-color: transparent;
            }

            a:active,a:hover {
                outline: 0;
            }

            abbr[title] {
                border-bottom: 1px dotted;
            }

            b,strong {
                font-weight: bold;
            }

            dfn {
                font-style: italic;
            }

            h1 {
                margin: .67em 0;
                font-size: 2em;
            }

            mark {
                color: #000;
                background: #ff0;
            }

            small {
                font-size: 80%;
            }

            sub,sup {
                position: relative;
                font-size: 75%;
                line-height: 0;
                vertical-align: baseline;
            }

            sup {
                top: -.5em;
            }

            sub {
                bottom: -.25em;
            }

            img {
                border: 0;
            }

            svg:not(:root) {
                overflow: hidden;
            }

            figure {
                margin: 1em 40px;
            }

            hr {
                height: 0;
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
            }

            pre {
                overflow: auto;
            }

            code,kbd,pre,samp {
                font-family: 'K2D', monospace;
                font-size: 1em;
            }

            button {
                transition: background-color 0.3s linear 0s;
                -webkit-appearance: none!important;
                box-sizing: border-box;
            }

            input,optgroup,select,textarea {
                margin: 0;
                font: inherit;
                color: inherit;
            }

            button {
                overflow: visible;
            }

            button,select {
                text-transform: none;
            }

            button,html input[type="button"],input[type="reset"],input[type="submit"] {
                -webkit-appearance: button;
                cursor: pointer;
            }

            button[disabled],html input[disabled] {
                cursor: default;
            }

            button::-moz-focus-inner,input::-moz-focus-inner {
                padding: 0;
                border: 0;
            }

            input {
                line-height: normal;
            }

            input[type="checkbox"],input[type="radio"] {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                padding: 0;
            }

            input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button {
                height: auto;
            }

            input[type="search"] {
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
                -webkit-appearance: textfield;
            }

            input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration {
                -webkit-appearance: none;
            }

            fieldset {
                padding: .35em .625em .75em;
                margin: 0 2px;
                border: 1px solid #c0c0c0;
            }

            legend {
                padding: 0;
                border: 0;
            }

            textarea {
                overflow: auto;
            }

            optgroup {
                font-weight: bold;
            }

            table {
                border-spacing: 0;
                border-collapse: collapse;
            }

            td,th {
                padding: 0;
            }

            @media print {
                *, *:before, *:after {
                    color: #000 !important;
                    text-shadow: none !important;
                    background: transparent !important;
                    -webkit-box-shadow: none !important;
                    box-shadow: none !important;
                }

                a, a:visited {
                    text-decoration: underline;
                }

                a[href]:after {
                    content: " (" attr(href) ")";
                }

                abbr[title]:after {
                    content: " (" attr(title) ")";
                }

                a[href^="#"]:after, a[href^="javascript:"]:after {
                    content: "";
                }

                pre, blockquote {
                    border: 1px solid #999;
                    page-break-inside: avoid;
                }

                thead {
                    display: table-header-group;
                }

                tr, img {
                    page-break-inside: avoid;
                }

                img {
                    max-width: 100% !important;
                }

                p, h2, h3 {
                    orphans: 3;
                    widows: 3;
                }

                h2, h3 {
                    page-break-after: avoid;
                }

                .navbar {
                    display: none;
                }

                .btn > .caret, .dropup > .btn > .caret {
                    border-top-color: #000 !important;
                }

                .label {
                    border: 1px solid #000;
                }

                .table {
                    border-collapse: collapse !important;
                }

                .table td, .table th {
                    background-color: #fff !important;
                }

                .table-bordered th, .table-bordered td {
                    border: 1px solid #ddd !important;
                }
            }

            * {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            *:before,*:after {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            html {
                font-size: 10px;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            }

            body {
                font-family: "K2D", Helvetica, Arial, sans-serif;
                font-size: 14px;
                line-height: 1.42857143;
                color: #333;
            }

            input,button,select,textarea {
                font-family: inherit;
                font-size: inherit;
                line-height: inherit;
            }

            a {
                color: #337ab7;
                text-decoration: none;
            }

            a:hover,a:focus {
                color: #23527c;
                text-decoration: underline;
            }

            a:focus {
                outline: 5px auto -webkit-focus-ring-color;
                outline-offset: -2px;
            }

            [role="button"] {
                cursor: pointer;
            }

            @font-face {
                font-family: 'Glyphicons Halflings';
                src: url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/fonts/glyphicons-halflings-regular.eot');
                src: url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/fonts/glyphicons-halflings-regular.woff') format('woff'), url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
            }

            .glyphicon {
                z-index: -100;
                position: static;
                top: 1px;
                display: inline-block;
                font-family: 'Glyphicons Halflings';
                font-style: normal;
                font-weight: normal;
                line-height: 1;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            .glyphicon-star:before {
                content: "\e006";
            }

            .glyphicon-th-list:before {
                content: "\e012";
            }

            .glyphicon-hand-right:before {
                content: "\e127";
            }

            .glyphicon-link:before {
                content: "\e144";
            }

            .glyphicon-search:before {
                content: "\e003";
            }

            .glyphicon-check:before {
                content: "\e067";
            }

            .btn {
                display: inline-block;
                padding: 6px 12px;
                margin-bottom: 0;
                font-size: 14px;
                font-weight: normal;
                line-height: 1.42857143;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                touch-action: manipulation;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 4px;
            }

            .btn:focus,.btn:active:focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn.active.focus {
                outline: 5px auto -webkit-focus-ring-color;
                outline-offset: -2px;
            }

            .btn:hover,.btn:focus,.btn.focus {
                color: #333;
                text-decoration: none;
            }

            .btn:active,.btn.active {
                background-image: none;
                outline: 0;
                -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
                box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            }

            .btn.disabled,.btn[disabled],fieldset[disabled] .btn {
                cursor: not-allowed;
                filter: alpha(opacity=65);
                -webkit-box-shadow: none;
                box-shadow: none;
                opacity: .65;
            }

            a.btn.disabled,fieldset[disabled] a.btn {
                pointer-events: none;
            }

            .btn-default {
                color: #333;
                background-color: #fff;
                border-color: #ccc;
            }

            .btn-default:focus,.btn-default.focus {
                color: #333;
                background-color: #e6e6e6;
                border-color: #8c8c8c;
            }

            .btn-default:hover {
                color: #333;
                background-color: #e6e6e6;
                border-color: #adadad;
            }

            .btn-default:active,.btn-default.active,.open > .dropdown-toggle.btn-default {
                color: #333;
                background-color: #e6e6e6;
                border-color: #adadad;
            }

            .btn-default:active:hover,.btn-default.active:hover,.open > .dropdown-toggle.btn-default:hover,.btn-default:active:focus,.btn-default.active:focus,.open > .dropdown-toggle.btn-default:focus,.btn-default:active.focus,.btn-default.active.focus,.open > .dropdown-toggle.btn-default.focus {
                color: #333;
                background-color: #d4d4d4;
                border-color: #8c8c8c;
            }

            .btn-default:active,.btn-default.active,.open > .dropdown-toggle.btn-default {
                background-image: none;
            }

            .btn-default.disabled:hover,.btn-default[disabled]:hover,fieldset[disabled] .btn-default:hover,.btn-default.disabled:focus,.btn-default[disabled]:focus,fieldset[disabled] .btn-default:focus,.btn-default.disabled.focus,.btn-default[disabled].focus,fieldset[disabled] .btn-default.focus {
                background-color: #fff;
                border-color: #ccc;
            }

            .btn-default .badge {
                color: #fff;
                background-color: #333;
            }

            .btn-primary {
                color: #fff;
                background-color: #337ab7;
                border-color: #2e6da4;
            }

            .btn-primary:focus,.btn-primary.focus {
                color: #fff;
                background-color: #286090;
                border-color: #122b40;
            }

            .btn-primary:hover {
                color: #fff;
                background-color: #286090;
                border-color: #204d74;
            }

            .btn-primary:active,.btn-primary.active,.open > .dropdown-toggle.btn-primary {
                color: #fff;
                background-color: #286090;
                border-color: #204d74;
            }

            .btn-primary:active:hover,.btn-primary.active:hover,.open > .dropdown-toggle.btn-primary:hover,.btn-primary:active:focus,.btn-primary.active:focus,.open > .dropdown-toggle.btn-primary:focus,.btn-primary:active.focus,.btn-primary.active.focus,.open > .dropdown-toggle.btn-primary.focus {
                color: #fff;
                background-color: #204d74;
                border-color: #122b40;
            }

            .btn-primary:active,.btn-primary.active,.open > .dropdown-toggle.btn-primary {
                background-image: none;
            }

            .btn-primary.disabled:hover,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary:hover,.btn-primary.disabled:focus,.btn-primary[disabled]:focus,fieldset[disabled] .btn-primary:focus,.btn-primary.disabled.focus,.btn-primary[disabled].focus,fieldset[disabled] .btn-primary.focus {
                background-color: #337ab7;
                border-color: #2e6da4;
            }

            .btn-primary .badge {
                color: #337ab7;
                background-color: #fff;
            }

            .reward-text {
                -moz-border-bottom-colors: none;
                -moz-border-left-colors: none;
                -moz-border-right-colors: none;
                -moz-border-top-colors: none;
                background-color: #f7f7f9;
                border-bottom-color: #e1e1e8;
                border-bottom-left-radius: 4px;
                border-bottom-right-radius: 4px;
                border-bottom-style: solid;
                border-bottom-width: 1px;
                border-image-outset: 0 0 0 0;
                border-image-repeat: stretch stretch;
                border-image-slice: 100% 100% 100% 100%;
                border-image-source: none;
                border-image-width: 1 1 1 1;
                border-left-color: #e1e1e8;
                border-left-style: solid;
                border-left-width: 1px;
                border-right-color: #e1e1e8;
                border-right-style: solid;
                border-right-width: 1px;
                border-top-color: #e1e1e8;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
                border-top-style: solid;
                border-top-width: 1px;
                margin-bottom: 14px;
                padding-bottom: 9px;
                padding-left: 14px;
                padding-right: 14px;
                padding-top: 9px;
            }

            .result-item {
                border-bottom: 1px dashed #ebe4ae;
                padding-bottom: 10px;
                text-align: center;
            }

            .lotto-title h1 {
                font-size: 2em;
            }

            .lotto-digit,.lotto-title h2 {
                font-size: 1.5em;
                color: green;
                letter-spacing: 2px;
                display: inline-block;
                float: none;
                padding: 0 0;
                text-align: center;
                vertical-align: top;
                line-height: 1.2;
                width: 100%
            }

            .lotto-title {
                color: #bd9331;
                font-size: 0.75em;
                text-align: center;
            }

            .lotto-title>h2 {
                font-size: 1.5em;
            }

            h2.mytitle {
                color: #0493cc;
                font-size: 1.8em;
            }

            h2.good {
                color: green;
            }

            h2.sad {
                color: red;
            }

            h3.good {
                color: green;
                font-size: 1.6em;
                border-bottom: 1px dashed #ebe4ae;
            }

            h3.sad {
                color: red;
                font-size: 1.6em;
                border-bottom: 1px dashed #ebe4ae;
            }

            .lotto-form_input {
                -moz-border-bottom-colors: none;
                -moz-border-left-colors: none;
                -moz-border-right-colors: none;
                -moz-border-top-colors: none;
                background-color: #fff;
                background-image: none;
                border-bottom-color: #ed501e;
                border-bottom-left-radius: 4px;
                border-bottom-right-radius: 4px;
                border-bottom-style: solid;
                border-bottom-width: 1px;
                border-image-outset: 0 0 0 0;
                border-image-repeat: stretch stretch;
                border-image-slice: 100% 100% 100% 100%;
                border-image-source: none;
                border-image-width: 1 1 1 1;
                border-left-color: #ed501e;
                border-left-style: solid;
                border-left-width: 1px;
                border-right-color: #ed501e;
                border-right-style: solid;
                border-right-width: 1px;
                border-top-color: #ed501e;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
                border-top-style: solid;
                border-top-width: 1px;
                box-shadow: 0 1px 1px rgba(0,0,0,0.075) inset;
                color: #555;
                display: block;
                font-size: 14px;
                height: 40px;
                line-height: 1.42857;
                padding-bottom: 6px;
                padding-left: 6px;
                padding-right: 6px;
                padding-top: 6px;
                transition-delay: 0s,0s;
                transition-duration: 0.15s,0.15s;
                transition-property: border-color,box-shadow;
                transition-timing-function: ease-in-out,ease-in-out;
                width: 99%;
                margin: 2px 2px;
            }

            .btn-checksearch.btn {
                width: 99%;
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 18px;
                margin: 5px 0px;
                cursor: pointer;
            }

            .btn-checksearch i {
                font-family: base-icon;
                speak: none;
                font-style: normal;
                font-weight: 400;
                font-variant: normal;
                text-transform: none;
                line-height: 1;
                -webkit-font-smoothing: antialiased;
            }

            .btn {
                -moz-border-bottom-colors: none;
                -moz-border-left-colors: none;
                -moz-border-right-colors: none;
                -moz-border-top-colors: none;
                -moz-user-select: none;
                background-image: none;
                border-bottom-left-radius: 4px;
                border-bottom-right-radius: 4px;
                border-bottom-style: solid;
                border-bottom-width: 1px;
                border-image-outset: 0 0 0 0;
                border-image-repeat: stretch stretch;
                border-image-slice: 100% 100% 100% 100%;
                border-image-source: none;
                border-image-width: 1 1 1 1;
                border-left-style: solid;
                border-left-width: 1px;
                border-right-style: solid;
                border-right-width: 1px;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
                border-top-style: solid;
                border-top-width: 1px;
                cursor: pointer;
                display: inline-block;
                font-size: 14px;
                font-weight: 400;
                line-height: 1.42857;
                margin-bottom: 0;
                padding-bottom: 6px;
                padding-left: 7px;
                padding-right: 7px;
                padding-top: 6px;
                text-align: center;
                vertical-align: middle;
                white-space: nowrap;
            }

            .menu-container {
                position: fixed;
                right: -175px;
                height: 100%;
                transition: right 0.5s;
            }

            .menu-container.active {
                right: 0;
                height: 100%;
                left: 0;
                top: 0;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0, 0.9);
                overflow-x: hidden;
                transition: 0.5s;
            }

            .buttons {
                display: block;
                float: right;
                background: #d3d3d3;
                margin-top: 40px;
            }

            .button {
                display: block;
                position: relative;
                width: 40px;
                height: 40px;
                background: #d3d3d3;
                cursor: pointer;
                border-bottom: 1px solid rgba(255,255,255,0.3);
            }

            .button:hover {
                background: #d3d3d3;
                border-bottom-color: transparent;
            }

            .icon-list:before, .icon-list:after {
                content: "";
                display: block;
                position: absolute;
                border-top: 4px solid #fff;
                width: 40%;
                left: 30%;
                height: 50%;
                top: 24%;
            }

            .icon-list:before {
                border-bottom: 4px solid #fff;
            }

            .icon-list:after {
                top: 44%;
            }

            .menu {
                float: right;
                height: 100%;
                width: 175px;
                background: #d3d3d3;
                overflow: auto;
            }

            .nav {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            .nav li {
                display: block;
                margin: 0;
                padding: 0;
            }

            .nav a {
                display: block;
                padding: 10px;
                border-bottom: 1px solid rgba(255,255,255,0.3);
                color: #fff;
                background: #d3d3d3;
                text-decoration: none;
            }

            .nav a:hover {
                background: rgba(255,255,255,0.3);
                border-bottom-color: transparent;
            }

            .wrapper {
                width: 100%;
                margin: 0 auto;
            }

            li.menu-item a {
                margin: 10px;
            }

            li.menu-item {
                margin: 3px;
                list-style-type: none !important;
            }

            .mycenter {
                margin-left: 50px;
            }

            .mysocial {
                margin: 10px 7px;
            }

            ul.sub-menu li:before {
                content: "...";
            }

            b,strong {
                font-weight: normal !important;
            }

            @media only screen and (max-width: 290px) {
                .btn {
                    font-size: 13px;
                }

                .widget-title {
                    font-size: 14px;
                    margin-bottom: 13px;
                }

                .wrapper {
                    width: 90%;
                    margin: 0 auto;
                }

                .lotto-check-list {
                    font-size: 0.9em;
                }

                .col-xs-9 {
                    position: relative;
                    min-height: 1px;
                    float: left;
                    width: 80%
                }

                .col-xs-2 {
                    position: relative;
                    min-height: 1px;
                    float: left;
                    width: 18%
                }

                .day66{
                    display: none;
                }
            }

            
        </style>
        <base target="_blank">
    </head>
    <body>
        <div class="wrapper">
            <aside id="custom_html-12" class="widget_text widget widget_custom_html clearfix">
                <h3 class="widget-title">
                    <a href="" title="showhoy" target="_blank">
                        <span>
                            <i class="glyphicon glyphicon-check" aria-hidden="true"></i>
                            <?php 
                                $xml = simplexml_load_file('https://www.lottery.co.th/feed');
                                $value = (string) $xml->channel->item[0]->title;
                            ?>
                        </span>
                    </a>
                </h3>
            </aside>
        </div>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>

    <?php
                function lotterycurl( $day, $month, $year, $number ){
                    //echo $day.$month.$year.$number;
                    
                        // API endpoint URL
                        $url = 'http://51.159.105.201:5000/lotto/'.$year.'-'.$month.'-'.$day.'/'.$number;
                        
                        ?><br><?php
                        

                        $options = array(
                            'http' => array(
                                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                                'method' => 'GET',
                                'timeout' => 30,
                            ),
                        );

                        // Create stream context
                        $context = stream_context_create($options);

                        // Send request and get response
                        $response = file_get_contents($url, false, $context);

                        $day = str_split($day);
                        $month = str_split($month);
                        $number = str_split($number);

                        return $response;
                }
    ?>

    <!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1680395029 -->
    <form id="frmLotto" method="POST" target="_self">
        <div class="form-group">
            <div>
                <?php 
                    // $values = array();
                    $values = [(string) $xml->channel->item[0]->link, (string) $xml->channel->item[1]->link,
                            (string) $xml->channel->item[2]->link, (string) $xml->channel->item[3]->link,
                            (string) $xml->channel->item[4]->link, (string) $xml->channel->item[5]->link,
                            (string) $xml->channel->item[6]->link, (string) $xml->channel->item[7]->link,
                            (string) $xml->channel->item[8]->link, (string) $xml->channel->item[9]->link,
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-02-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-65",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-65", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-64",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-64",  //64
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-64",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-64", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-63",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-63",  //63
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-05-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-63",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-63", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-62",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-62",  //62
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/15-07-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-62",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-62", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-61",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-61",  //61
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-03-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-61",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-61", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-60",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-60",  //60
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-60",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-60", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-59",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-59",  //59
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-59",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-59", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-58",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-12-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-58",  //58
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-06-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-05-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-58",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-01-58", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-57",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-57",  //57
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-57",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-01-57", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-56",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-56",  //56
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-56",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-56", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-55",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-55",  //55
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-55",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-55", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-54",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-54",  //54
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-54",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-54", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-53",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-53",  //53
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-53",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-53", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-52",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-52",  //52
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-52",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-52", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-51",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-51",  //51
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-51",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-51", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-50",

                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-12-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-12-50",  //50
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-11-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-11-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-10-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-10-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-09-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-09-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-08-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-08-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-07-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-07-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-06-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-06-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-05-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/02-05-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-04-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-04-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-03-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-03-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/16-02-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/01-02-50",
                            "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/17-01-50", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/30-12-49",
                        ];
                    //echo strlen($values[9]); ?><br><?php
                    //echo count($values);
                    $valueaDay = array();
                    $valueaMonth = array();
                    $valueaYear = array();
                    for($i=0;$i<count($values);$i++){
                        if($values[$i][33] == '-'){
                            $valueaYear[$i] = '25'.$values[$i][37].$values[$i][38];
                            $valueaMonth[$i] = $values[$i][34].$values[$i][35];
                            $valueaDay[$i] = '0'.$values[$i][32];
                        }
                        else{
                            $valueaDay[$i] = $values[$i][32].$values[$i][33];
                            $valueaMonth[$i] = $values[$i][35].$values[$i][36];
                            $valueaYear[$i] = '25'.$values[$i][38].$values[$i][39];
                        }
                    }
                ?>
            </div>
            <?php 
                    $valueaYearNow = intval($valueaYear[0]);
            ?>
            <table class="table table-hover text-nowrap" id="attribute_table">
                <thead>
                    <tr>
                        <th>ปี</th>
                        <th>วัน / เดือน</th>
                    </tr>
                </thead>
                
                <tr id="row1">
                    <td>
                        <select id="year" name="year" class="form-control-year">
                            <?php
                            echo "<option value=''>ปี</option>";
                            // Generate options for year dropdown
                            for ($i = $valueaYearNow; $i > 2540; $i--) {
                                if($i == $valueaYearNow){
                                    $j = $i - 543;
                                    echo "<option value='$j' selected>$i</option>";
                                }
                                else if($i != $valueaYearNow){
                                    $j = $i - 543;
                                    echo "<option value='$j'>$i</option>";
                                }
                            }
                            ?>
                        </select>
                    </td>
                        <?php
                            $monthTh = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
                                            "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
                        ?>
                    <td>
                        <select name="day" id="day_value" class="form-control-day-value">
                            <?php 
                                echo "<option value=''>วัน / เดือน</option>";
                                for($j=0;$j<$valueaYearNow-2550;$j++){                                  // value year
                                    for($i=0;$i<count($values);$i++){                                   // all value
                                        
                                            if(($values[$i][33] == '-') ){                                      // ตรวจเลขที่เป็นวันหลักหน่วย
                                                $valueaDay[$i] = '0'.$values[$i][32];
                                                $valueaMonth[$i] = $values[$i][34].$values[$i][35];
                                                $valueaYear[$i] = '25'.$values[$i][37].$values[$i][38];
                                                $thismonth = intval($valueaMonth[$i]-1);
                                                $yearNow = $valueaYear[$i]-543-$j;                              //year eng
                                                if($yearNow==$valueaYear[$i]-543){    
                                                    $valueaDay[$i]='0'.$values[$i][32];

                                                    if(($valueaYear[$i]==$valueaYear[0]) && ($valueaMonth[$i]==$valueaMonth[0]) && ($valueaDay[$i]==$valueaDay[0])){
                                                        echo "<option data-parent='$yearNow' value='$valueaDay[$i],$valueaMonth[$i]' selected>
                                                        $valueaDay[$i]".' / '."$monthTh[$thismonth]
                                                        </option>"; ?><br><?php
                                                    }
                                                    else{
                                                        echo "<option data-parent='$yearNow' value='$valueaDay[$i],$valueaMonth[$i]'>
                                                        $valueaDay[$i]".' / '."$monthTh[$thismonth]
                                                        </option>"; ?><br><?php
                                                    }
                                                }
                                            }
                                            else{                                                               // ตรวจเลขที่เป็นวันหลัก10
                                                $valueaDay[$i] = $values[$i][32].$values[$i][33];
                                                $valueaMonth[$i] = $values[$i][35].$values[$i][36];
                                                $valueaYear[$i] = '25'.$values[$i][38].$values[$i][39];
                                                $thismonth = intval($valueaMonth[$i]-1);
                                                $yearNow = $valueaYear[$i]-543-$j;
                                                if($yearNow==$valueaYear[$i]-543){ 
                                                    if(($valueaYear[$i]==$valueaYear[0]) && ($valueaMonth[$i]==$valueaMonth[0]) && ($valueaDay[$i]==$valueaDay[0]) ){
                                                        echo "<option data-parent='$yearNow' value='$valueaDay[$i],$valueaMonth[$i]' selected>
                                                        $valueaDay[$i]".' / '."$monthTh[$thismonth]
                                                        </option>"; ?><br><?php
                                                    }
                                                    else{
                                                        echo "<option data-parent='$yearNow' value='$valueaDay[$i],$valueaMonth[$i]'>
                                                        $valueaDay[$i]".' / '."$monthTh[$thismonth]
                                                        </option>"; ?><br><?php
                                                    }
                                                }
                                            }
                                            
                                    }    
                                }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
        </div><br/>
                    <div class="form-group">
                        <input type="text" name="number" maxlength="6" pattern="[0-9]{6}" class="lotto-form_input" placeholder="กรอกเลขสลาก" 
                        required oninvalid="setCustomValidity('คุณไม่ได้ระบุตัวเลขสลากที่ถูกต้อง หรือเลขสลากไม่ครบ 6 หลัก')" oninput="setCustomValidity('')">
                    </div><br/>

                    <div class="form-group">
                        <button type="submit" value="Submit" title="ตรวจสลากฯ ของคุณ" class="btn btn-primary">เช็คผลรางวัล</button>
                    </div>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Data received from form
                $day = $_POST['day'];
                $result_day = explode("," , $day);
                $aday = $result_day[0];
                $month = $result_day[1];
                $year = $_POST['year'];
                $number = $_POST['number'];

                // Send data to API and get response
                $response = lotterycurl($aday, $month, $year, $number);
                $response = str_split($response);
                $totalarr=0;
                $string = array();
                for($i=0 ; $i < count($response) ; $i++){
                    if (isset($response[$i])) {  // เพิ่มเงื่อนไขตรวจสอบความถูกต้องของ key
                        $string[$i] = $response[$i];
                        $totalarr = $totalarr + 1;
                    }
                }

                for($i=0 ; $i < count($response) ; $i++){
                    if (isset($response[$i])) {  // เพิ่มเงื่อนไขตรวจสอบความถูกต้องของ key
                        $string[$i] = $response[$i];
                    }
                }
                for($i=26;$i<($totalarr-2);$i++){
                    $string1[$i-26] = $response[$i];
                }

                $word;
                $string = implode('',$string1);
                $string = strtoupper($string); //ปรับให้ String ที่ได้มา เป็นตัวใหญ่ทั้งหมด เพราะการเทียบ ใน ENT_COMPAT จะตรงการ อักขระตัวใหญ่เท่านั้น
                $string = preg_replace('/\\\U([0-9A-F]+)/', '&#x$1;', $string); //ตัด string ที่ขึ้นต้น ด้วย \u ตรงนี้ที่ต้องใส่ "\" หลายอันเพราะมันเป็น syntax ซ้ำในฟังก์ชั่น
                $stringx = html_entity_decode($string, ENT_COMPAT, 'UTF-8');

                for($i=0 ; $i < count($response) ; $i++){
                    if (isset($response[$i])) {  // เพิ่มเงื่อนไขตรวจสอบความถูกต้องของ key
                        $string[$i] = $response[$i];
                        if(($i=='15') && ($string[15] == '1')){
                            //echo "ยินดีด้วย คุณถูก";
                            $word = "ยินดีด้วย คุณถูก";
                        }
                        else if(($i=='15') && ($string[15] == '2')){
                            ?><h4><?php
                            $word = "เสียใจด้วย";
                            ?></h4><?php
                        }
                    }
                }
                ?><h4 style="color:black;"><?php
                echo $word.' '.$stringx; 
                ?></h4><?php
            }
        ?>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function add_attribute_row() {
            $rowno = $("#attribute_table tr").length;
            $("#attribute_table tr:last").after("<tr id='row" + $rowno + "'>
                <td>
                    <select id="year" name="year" class="form-control year">
                            <?php
                            echo "<option value='$valueaYearNow+1' selected></option>";
                            // Generate options for year dropdown
                            for ($i = $valueaYearNow; $i > 2540; $i--) {
                                if($i == $valueaYearNow){
                                    $j = $i - 543;
                                    echo "<option value='$j' selected>$i</option>";
                                }
                                else if($i != $valueaYearNow){
                                    $j = $i - 543;
                                    echo "<option value='$j'>$i</option>";
                                }
                            }
                            ?>
                    </select>
                </td>
                <td>
                <select name="day" id="day_value" class="form-control day_value">
                        <?php 
                            //for($j=0;$j<$valueaYearNow-2550;$j++){                                // value year
                                for($i=0;$i<count($values);$i++){                                   // all value
                                    
                                    $valueaDay[$i] = $values[$i][32].$values[$i][33];
                                    $valueaMonth[$i] = $values[$i][35].$values[$i][36];
                                    $valueaYear[$i] = '25'.$values[$i][38].$values[$i][39];
                                    //$month[$i] = $valueaMonth[$i];
                                    if($valueaYear[$i]=$valueaYear[0]-$j){
                                    //echo "$thismonth";
                                        if($values[$i][33] == '-'){
                                            $thismonth = intval($valueaMonth[$i]-1);
                                            $valueaYear[$i] = '25'.$values[$i][37].$values[$i][38];
                                            $valueaDay[$i] = '0'.$values[$i][32];
                                            $valueaMonth[$i] = $values[$i][34].$values[$i][35];
                                            
                                                echo "<option data-parent='$valueaYear[0]-2500' value='$valueaDay[$i],$valueaMonth[$i]'>
                                                $valueaDay[$i]".' / '."$monthTh[$thismonth]
                                                </option>"; ?><br><?php
                                        }
                                        else{
                                            $thismonth = intval($valueaMonth[$i]-1);
                                                echo "<option data-parent='$valueaYear[0]-2500' value='$valueaDay[$i],$valueaMonth[$i]'>
                                                $valueaDay[$i]".' / '."$monthTh[$thismonth]
                                                </option>"; ?><br><?php
                                        }
                                    }
                                    else{
                                        break;
                                    }
                                }  
                        ?>
                    </select>
                </td>
            </tr>");
        }
    </script>
    <script>
    $('#year').bind('change', function () {
        var parent = $(this).val();
        console.log(parent)
        $('#day_value').children().each(function () {
            if ($(this).data('parent') != parent) {
                $(this).hide();
            } else
                $(this).show();
        });
    });
</script>
</html>

