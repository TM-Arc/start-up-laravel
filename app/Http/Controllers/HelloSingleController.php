<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloSingleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return <<<EOL
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
</style>
</head>
<body>
        <h1>Single Action</h1>
        <p>これは、シングルアクションコントローラのアクションです。</p>
</body>
</html>
EOL;
    }
}
