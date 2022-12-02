###################
What is JapanTravel
###################

JapanTravel is a travel guide website for Japan that includes a interactive map that can show realtime data like weather and nearby places about a region. It also includes a user submitted blog posts.

I made the website so the users can easily find the necessary informations about the region on a single page. This includes the nearby hotels, websites and railway stations since its the most used form of transportation in Japan. The website is also mobile responsive so It can be used comfortably on a phone.

The backend is made in a way that makes it easy to add new regions. You just need to provide the latitude and longitude and it will automatically get the necessary details and nearby places.

It uses CodeIgniter 3 for its PHP backend and Bootstrap 5 + Jquery for the frontend. The API used for getting the region data is Geoapify and Openweathermap.

*******************
Server Requirements
*******************

PHP version 7 or newer is recommended.

************
Installation
************

Upload the file on the web server root directory or inside a subfolder.
Update the $config['base_url'] inside application\config\config.php. For example "https://www.japantravel.com" if you're using a domain or "http://localhost/JapanTravel/" if you're on a localhost
The region and blog data is currently using the JSON file in the root directory (sample_place_data.json, sample_blog_data.json). If you are going to connect to a sql server, update the application\config\database.php with your database credentials and modify the functions in the model files in application\models\ <https://www.codeigniter.com/userguide3/general/models.html>.

*********
Resources
*********

- `User Guide <https://codeigniter.com/docs>`
- `Bootstrap 5 <https://getbootstrap.com/docs/5.0/getting-started/introduction/>`
- `Geoapify <https://apidocs.geoapify.com/>`
- `Openweathermap <https://openweathermap.org/api>`