# Hack4Health - Nutrition App

Team: Luna, Annie, Ray, Michael

Overview:

User provides daily food consumption, the webpage will produce the Nutrition Content that the user consumed. It will also have the function to remind users what other nutrition they need to intake more.

The proposal is at: https://docs.google.com/document/d/1ByBsf0LQUZiPADH4iu5KVkld3q4h4POWfyimPDTz1d4/edit?usp=sharing

We make an API call to FoodData Central (https://fdc.nal.usda.gov) to get nutrition data for food items taken, and compare it to the daily recommended amount from the Canadian government website (https://www.canada.ca/en/health-canada/services/food-nutrition/healthy-eating/dietary-reference-intakes/tables.html).

We have a MySQL database for storage.

Tech Stack:

- PHP
- MySQL
- XAMPP
- jQuery/Javascript
- HTML5 Boilerplate (https://html5boilerplate.com)
- HTML
- CSS

Main pages:

- Login/Registration
- Food Intake
- Nutrition Summary

Future Improvements:

- Display the Nutrition Summary report on the same page as the Food Intake page (or consider making a single page app), so the users don’t need to jump between screens to view their real-time nutrition intake.
- Add a timestamp, so that users can see the time they ate each food item and further functionalities can be developed like comparing the data between different days.
- Form field validation, eg. email address limit, and password hidden.
- UI design (e.g. make drop-down menu instead of text input for Gender, make scrollable pages)
