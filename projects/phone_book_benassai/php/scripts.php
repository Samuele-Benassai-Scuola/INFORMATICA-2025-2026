<?php
    $phone_book = ["name" => [], "number" => []];

    function print_phone_book() {
        global $phone_book;

        var_dump($phone_book);
    }

    function add_phone_book($name, $number) {
        global $phone_book;

        $phone_book["name"][] = $name;
        $phone_book["number"][] = $number;
    }

    function remove_phone_book($name) {
        global $phone_book;

        $new_name = [];
        $new_number = [];

        foreach ($phone_book as $key => $value) {
            if ($key != $name) {
                $new_name[] = $key;
                $new_number[] = $value;
            }
        }

        $phone_book["name"] = $new_name;
        $phone_book["number"] = $new_number;
    }
?>