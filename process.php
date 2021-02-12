<?php
    $errors = array(); //To hold the validation error data
    $data = array(); // To hold the form data

    // ========== Input fields validation ==========
    if(empty($_POST['name']))
        $errors['name'] = 'Name is required';
        
    if(empty($_POST['email']))
        $errors['email'] = 'Email is required';
        
    if(empty($_POST['subject']))
        $errors['subject'] = 'Subject is required';
        
    if(empty($_POST['message']))
        $errors['message'] = 'Message is required';

    // ========== Returning the resopnse ==========
    if( ! empty($errors)) {
        $data['success'] = false;
        $data['erros'] =    $errors;
    } else {
        $data['success'] = true;
        $data['message'] =    "Success";
    }

    echo json_encode($data);
?>