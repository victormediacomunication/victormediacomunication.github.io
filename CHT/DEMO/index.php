<html>
    <head>

    <!-- Basic -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=0.4, maximum-scale=0.4, user-scalable=yes">
    
    <title>CHAT ROOM DEMO</title>
    <style type="text/css">
body             { padding-left:40px; background: green; font-family:arial;}
input, textarea  { font-family: courier new; font-size: 12px; }
#content         { width:800px; text-align:left; margin-left:60px; }

#chatwindow      { border:2px solid orange; padding:4px; background: cyan; color: green;}
#chatnick        { border: none; border-bottom:2px solid red; padding:4px; background:white;}
#chatmsg         { border: none; border-bottom:3px solid red; padding:3px; background:white; }

#info            { text-align:left; padding-left:20px; font-family:arial; }
#info td         { font-size:12px; padding-right:30px; color:#DFDFDF;  }
#info .small     { font-size:10px; padding-left:40px; padding-right:0px; }

#info a          { text-decoration:none; color:white; }
#info a:hover    { text-decoration:underline; color:#CF9700; }
</style>
    </head>
    <body>
<?php
$chatnick == $_POST["chatnick"];
if(($_POST["chatnick"]) == " ")
{
echo "<html><body><strong style='font-size: 50px;'>inserisci un username valido</strong></body></html>";
}
else{
echo 'Username Valido <?php echo $_POST["chatnick"]; ?>';
}
?>
        <div id="info">
        <br>
            <table border="0">
                <tr>
                    <td colspan="2">
                        <a href="#"><font style="font-size:14px">CHAT ROOM DEMO</a> (v3)</font><br>
                    </td>
                </tr>
                <tr>
                    <td class="small">AUTORE</td>
                    <td class="small"><a href="#">VICTOR MEDIA COMUNICATION</a></td>
                </tr>
                <tr>
                    <td class="small">HOME</td>
                    <td class="small"><a href="#">/</a></td>
                </tr>
                <tr>
                    <td class="small">SORGENTE</td>
                    <td class="small"><a href="#">NON DISPONIBILE</a></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
<strong size="20px" style="font-size: 40px; text-align:relative;">DEMO</strong>
                <tr>
                    <td colspan="2" class="small">    VISUALIZZAZIONE: <a href="#" onclick="javascript:show_newmsg_on_bottom=!show_newmsg_on_bottom">Sopra/ Sotto</a>(Display)  | TESTO: <a href="#" onclick="javascript:chatwindow.style.fontWeight= (chatwindow.style.fontWeight=='bold') ? 'normal' : 'bold';">GRASSETTO</a></td>
                </tr>
            </table>

        </div>
        <br>
        <br>
        <div id="content">
            <textarea id="chatwindow" rows="19" cols="95" readonly></textarea><br>

            <input id="chatnick" type="text" size="10" maxlength="10" placeholder="Nome" value="<?php echo $_POST["chatnick"]; ?>">&nbsp;
            <input id="chatmsg" type="text" size="80" maxlength="80"  onkeyup="keyup(event.keyCode);" placeholder="Messaggio">
            <input type="button" value="✓" onclick="submit_msg();" style="cursor:pointer;border:1px solid gray;"><br><br>
        </div>

    </body>
</html>

<script type="text/javascript" src="/cht_is.js"></script>
