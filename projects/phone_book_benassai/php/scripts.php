    <?php
        $phone_book = [];

        function print_phone_book() {
            global $phone_book;
            
            echo 'Rubrica:<br>';
            
            foreach ($phone_book as $key => $value) {
            	echo $key . ': ' . $value . '<br>';
            }
        }

        function add_phone_book($name, $number) {
            global $phone_book;

            if ($phone_book[$name] !== null)
                return;

            $phone_book[$name] = $number;
        }

        function remove_phone_book($name) {
            global $phone_book;
            
            $new_phone_book = [];
            
            foreach ($phone_book as $key => $value) {
            	if ($key != $name)
                	$new_phone_book[$key] = $value;
            }

            $phone_book = $new_phone_book;
        }

        function edit_phone_book($name, $new_number) {
            global $phone_book;

            if ($phone_book[$name] === null)
                return;

            $phone_book[$name] = $new_number;
        }
    ?>