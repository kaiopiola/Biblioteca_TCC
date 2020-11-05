<?php
    if (!empty($_POST['chk'])) {
        // Counting number of checked checkboxes.
        $checked_count = count($_POST['chk']);
        echo "You have selected following " . $checked_count . " option(s): <br/>";
        // Loop to store and display values of individual checked checkbox.
        foreach ($_POST['chk'] as $selected) {
            echo "<p>" . $selected . "</p>";
        }
        echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
    } else {
        echo "<b>Please Select Atleast One Option.</b>";
    }

