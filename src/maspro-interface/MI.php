<?php

interface MI {
    //dev maspro (dm)
    public static function dm ();
    //container style (cs)
    public static function cs ();
    //child style (ht)
    public static function ht ();
    //grid (gd)
    public static function gd ($cols,$gap,$rows="",$areas = "");
    //start end (se)
    public static function se ($class,$start = 1,$rstart=1,$end = 0,$rend=0,);
    //areas (as)
    function as ($class,$start,$end);
    //container (cr) $b = subtag $q = quantity
    public static function cr (string $tag,string $b="",string $style='',int $q = 12);
    //wrap js (wj)
    public static function wj ($code);
    //Get Element (ge)
    public static function ge ($element,$id=1,$class=0,$tag=0,$qs=0,$qsa=0);
    //Remove Text (rt)
    public static function rt (string $var);
    //Set Attribute (sa)
    public static function sa ($attrb,$name,$element);
}