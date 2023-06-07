<?= 
    Maspro::dm(
        $dev_maspro_page_1,
        "CSS Grid",
        /**
         * 0 = para utilizar gap , columns , areas
         * 1 = columns
         * 2 = columns & rows
         * > 2 = gap , columns , rows
         * 
         * order of the args from left to right
         * 1-switch 2-cols 3-rows|areas 4-gap
         */
        ".container {".Maspro::gd(2,"100px 100px 100px")."}"
    );
?>