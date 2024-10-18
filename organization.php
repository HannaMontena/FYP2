<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizational Chart</title>
    <style>
        .org-chart ul {
            padding-top: 20px;
            position: relative;
        }
        .org-chart li {
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;
        }
        .org-chart li::before, .org-chart li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 1px solid #ccc;
            width: 50%;
            height: 20px;
        }
        .org-chart li::after {
            right: auto;
            left: 50%;
            border-left: 1px solid #ccc;
        }
        .org-chart li:only-child::after, .org-chart li:only-child::before {
            display: none;
        }
        .org-chart li:only-child {
            padding-top: 0;
        }
        .org-chart li:first-child::before, .org-chart li:last-child::after {
            border: 0 none;
        }
        .org-chart li:last-child::before {
            border-right: 1px solid #ccc;
            border-radius: 0 5px 0 0;
        }
        .org-chart li:first-child::after {
            border-radius: 5px 0 0 0;
        }
        .org-chart ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 1px solid #ccc;
            width: 0;
            height: 20px;
        }
        .org-chart li div {
            border: 1px solid #ccc;
            padding: 10px;
            display: inline-block;
            background: white;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="org-chart">
    <ul>
        <li>
            <div>CEO</div>
            <ul>
                <li>
                    <div>CTO</div>
                    <ul>
                        <li><div>Lead Developer</div></li>
                        <li><div>QA Engineer</div></li>
                    </ul>
                </li>
                <li>
                    <div>CFO</div>
                    <ul>
                        <li><div>Accountant</div></li>
                    </ul>
                </li>
                <li>
                    <div>COO</div>
                    <ul>
                        <li><div>Operations Manager</div></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>



</body>
</html>
