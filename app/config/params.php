<?php

return [
    'adminEmail' => \getenv('ADMIN_EMAIL', true) ?: 'default@backend-university.ru',
    'senderEmail' => 'noreply@backend-university.ru',
    'senderName' => 'Backend-university mailer',
];
