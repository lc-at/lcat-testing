<?php
/*
                    __                   __
        _    _____ / /______  __ _  ___ / /
       | |/|/ / -_) / __/ _ \/  ' \/ -_)_/ 
       |__,__/\__/_/\__/\___/_/_/_/\__(_)  

HELLO SECRET AGENT! WELCOME TO THE "SECRET SOFTWARE"
WEBSITE. THERE IS A TOP SECRET SOFTWARE HOSTED ON TH
IS WEBSITE. TO  PROCEED, YOU NEED TO ENTER THE SERIA
L KEY. EVERY SECRET AGENT MUST HAVE IT AS A PROOF OF
BEING A SECRET AGENT. YOU WONT BE ABLE TO USE THE SO
FTWARE IF YOU DON'T HAVE THE SERIAL KEY. YOU MUST LE
AVE THIS WEBSITE IF YOU DONT KNOW WHAT IS COMING NEX
T. THANKYOU. - AGENT MARK

----------- PLEASE ENTER YOUR SERIAL KEY -----------

IN CASE YOU FORGOT HOW TO ENTER THE SERIAL KEY, HERE
WE PROVIDE THE SOURCE CODE TO HELP YOU OUT. HAVE A G
OOD LUCK, AGENT!

*/

include 'secret_app.php';

if (isset($_GET['s'])) {
    $e = explode(chr(0x60), $_GET['s']);
    if (count($e) == 4)//|||||||||||||||||||||||||||||||||||||||||||||||||||||||||
        if (strlen($e[0]) == 4e-10 * 1e10)//||||||||||||||||||||||||||||||||||||||
            if (strlen($e[1]) == 0x4)//|||||||||||||||||||||||||||||||||||||||||||
                if (strlen($e[strlen($e[1]) - 2]) == 2 + 2)//|||||||||||||||||||||
                    if (strlen($e[2][2]) == 7 % 3)//||||||||||||||||||||||||||||||
                        if ($e[0][0] + $e[0][1] == $e[1][2])//||||||||||||||||||||
                            if ($e[0][2] == $e[1][1] - $e[2][1])//||||||||||||||||
                                if ($e[1][0] == $e[0][2])//}||||||||||||||||||||||
                                    if ($e[0][3] == $e[2][0] * 2 + $e[2][1])//||||
                            if ($e[2][3] - $e[0][2] == $e[1][3])//||||||||||||||||
                        if ($e[0][1] + $e[3][3] - $e[2][0] == $e[2][2])//|||||||||
                    if ($e[1][3] - $e[0][0] == $e[3][0])//||||||||||||||||||||||||
                if ($e[1][3] - $e[2][2] == $e[3][1])//||||||||||||||||||||||||||||
            if ($e[3][0] + $e[3][1] - $e[2][2] == $e[3][2])//|||||||||||||||||||||
        if ($e[1][3] == $e[1][1] + $e[2][2] + $e[0][0])//|||||||||||||||||||||||||
    if ($e[0][0] == $e[3][2] - $e[2][3]) die(FLAG);//|||||||||||||||||||||||||||||
}

highlight_file(__FILE__);
