<?php 
if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $nom = htmlspecialchars($_POST['surname']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

        }else{
            echo "Email non valide";
        }
        
        $body = [
            'Messages' => [
            [
                'From' => [
                'Email' => "EMAIL",
                'Name' => "NAME"
                ],
                'To' => [
                [
                    'Email' => "EMAIL",
                    'Name' => "NAME"
                ]
                ],
                'Subject' => "SUJECT",
                'TextPart' => 'TEXT EMAIL', 
                'HTMLPart' => "TEXT EMAIL",
                'CustomID' => "AppGettingStartedTest"
            ]
            ]
        ];
            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success();
            echo "Email envoyé avec succès !";
        }
        else{
            echo "Email non valide";
        }

    } else {
        header('Location: index.php');
        die();
    }