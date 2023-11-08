<?php

function alert($type, $msg)
{
    // if suncess login then alert-success class else alert-danger class , stored that in varibale and then added in class.
    $bs_class = ($type == "success") ? "alert-sucess" : "alert-danger";
    // this is hero doc method of printing we have taken bootstrap dismissble alert.
    // no extra space , proper indent alert at start and end.
    echo <<<alert
                <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                    <strong class="me-3">$msg</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            alert;
}
