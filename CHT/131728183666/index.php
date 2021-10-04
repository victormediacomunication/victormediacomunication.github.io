<style>
body{
background-color: White;
}
.lds-spinner {
  color: official;
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-spinner div {
  transform-origin: 40px 40px;
  animation: lds-spinner 1.2s linear infinite;
}
.lds-spinner div:after {
  content: " ";
  display: block;
  position: absolute;
  top: 3px;
  left: 37px;
  width: 6px;
  height: 18px;
  border-radius: 20%;
  background: #green;
}
.lds-spinner div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -1.1s;
}
.lds-spinner div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -1s;
}
.lds-spinner div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.9s;
}
.lds-spinner div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.8s;
}
.lds-spinner div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.7s;
}
.lds-spinner div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.6s;
}
.lds-spinner div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.5s;
}
.lds-spinner div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.4s;
}
.lds-spinner div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.3s;
}
.lds-spinner div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.2s;
}
.lds-spinner div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.1s;
}
.lds-spinner div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
}
@keyframes lds-spinner {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

</style>
<form method="post">
<select name="ROOMSELECTION">
<option value="ROOM1">ROOM #1</option>
<option value="ROOM2">ROOM #2</option>
<option value="ROOM3">ROOM #3</option>
<option value="ROOM4">ROOM #4</option>
<option value="ROOM5">ROOM #5</option>
<option value="ROOM6">ROOM #6</option>
<option value="ROOM7">ROOM #7</option>
</select>
<input type="submit"></input>
</form>
<?php
switch($_POST['ROOMSELECTION']){
case 'ROOM1':
    //DO ROOM #1
echo "<p> Hai selezionato la ROOM <strong>N° 1</strong></p>";
sleep(2);
echo '<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
sleep(5);
header("Location: ROOM 1");
die();
break;
case 'ROOM2':
    // DO ROOM #2
echo "<p> Hai selezionato la ROOM <strong>N° 2</strong></p>";
sleep(2);
echo '<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
sleep(5);
header("Location: ROOM 1");
die();
break;
case 'ROOM3':
    // DO ROOM #3
echo "<p> Hai selezionato la ROOM <strong>N° 3</strong></p>";
sleep(2);
echo '<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
sleep(5);
header("Location: ROOM 1");
die();
break;
case 'ROOM4':
    // DO ROOM #4
echo "<p> Hai selezionato la ROOM <strong>N° 4</strong></p>";
sleep(2);
echo '<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
sleep(5);
header("Location: ROOM 1");
die();
break;
case 'ROOM5':
    // DO ROOM #5
echo "<p> Hai selezionato la ROOM <strong>N° 5</strong></p>";
sleep(2);
echo '<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
sleep(5);
header("Location: ROOM 1");
die();
break;
case 'ROOM6':
    // DO ROOM #6
echo "<p> Hai selezionato la ROOM <strong>N° 6</strong></p>";
sleep(2);
echo '<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
sleep(5);
header("Location: ROOM 1");
die();
break;
case 'ROOM7':
    // DO ROOM #7
echo "<p> Hai selezionato la ROOM <strong>N° 7</strong></p>";
sleep(2);
echo '<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
sleep(5);
header("Location: ROOM 1");
die();
break;
default:
    // DO IF WRONG
echo "Seleziona una stanza!";
}
?>
