1. So I have made a controller for both login and register page. The regex protection is applied in the app\Http\Requests\LoginRequest.php and app\Http\Requests\RegisterRequest.php

![image](https://github.com/user-attachments/assets/f83a451e-2cd1-406c-bb26-7fc116e9e8e2)
(caption)LoginRequest.php

![image](https://github.com/user-attachments/assets/4cb52fd9-a094-4258-a71a-41b449d935c5)
(caption)RegisterRequest.php

2. Profile Page
![image](https://github.com/user-attachments/assets/660effb4-1ed0-4cb4-bf52-a581fd9003ab)
(caption)laravel-crud\resources\views\profile\edit.blade.php

so I created another migrations to add the profile input fields called add_profile_fields_to_user_tables
so the user table now looks like this 
![image](https://github.com/user-attachments/assets/707a3821-696d-403d-bfb4-4ab242d3622e)
I could have changed my create_user migration... but I think it would make my auth not work so..

Then create a controller for profile
and added a view to edit the profile

last changes, 10.20pm 25 April 25 - Hanif
