<?php
function makecoffee($type = "卡布其諾")
{
    return "來杯{$type}<br>";
}
echo makecoffee();
echo makecoffee('');
echo makecoffee(null);
echo makecoffee("義式濃縮");
