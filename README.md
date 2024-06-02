
#  Idol Meet App

https://github.com/maciekstrach01/IdolMeetApp/assets/146733279/3a6f37ce-a585-4a76-9a41-bf8e70bcd0f3

IdolMeetApp is an innovative web-based application that allows users to interact with their favorite artists. 

With IdolMeetApp, users can easily schedule appointments with artists through MyCalendly integration, browse artist profiles and track their activities.

The app supports two separate roles: users and artists, offering different levels of permissions and functionality to accommodate the needs of both groups.

IdolMeetApp provides a seamless and intuitive experience for users and artists alike, enabling easy networking and appointment scheduling. 

The application is built using modern technologies such as PHP, PostgreSQL, Nginx and Docker, ensuring its scalability and reliability.
## Screenshots

![1](https://github.com/maciekstrach01/IdolMeetApp/assets/146733279/30f7be01-ad61-403a-9031-a4f06210b7dc)

![2](https://github.com/maciekstrach01/IdolMeetApp/assets/146733279/ab3ed51d-0f6c-49f4-8dc9-088452c2f786)

![3](https://github.com/maciekstrach01/IdolMeetApp/assets/146733279/38f44cda-ddbc-46c9-87db-f62d9f8d6832)

![4](https://github.com/maciekstrach01/IdolMeetApp/assets/146733279/682b9eb8-952b-4dd9-8ef3-2dc773bce76b)

![5](https://github.com/maciekstrach01/IdolMeetApp/assets/146733279/4f0b85da-a1d4-42a3-8ac6-3ce9b090b981)

![6](https://github.com/maciekstrach01/IdolMeetApp/assets/146733279/8a648d0f-47c3-49f6-b900-d102998d3224)

![7](https://github.com/maciekstrach01/IdolMeetApp/assets/146733279/c640b57f-7233-4ed5-b39f-0de6616e4dc6)


![8](https://github.com/maciekstrach01/IdolMeetApp/assets/146733279/0e34384e-1c2f-4ca1-a324-d9bef0ea293b)
















## The application's life cycle

The application works cyclically in such a way that no matter which page the user enters (login page, registration page, team profile, etc.), the process always starts with the index.php file. Each HTTP request is processed as follows:

1 The user sends a request:

o The user opens a browser and types in a URL, such as http://localhost:8080/login.

o The browser sends an HTTP request to the server.

2 The server receives the request:

o The Nginx server receives the request and forwards it to the index.php file in the PHP container.

3 index.php file:

o The index.php file is run as an entry point for all requests.

o It retrieves the URL path and initiates routing to determine which controller and method should handle the request.

4 Routing:

o The Routing class analyzes the URL path and routes the request to the appropriate controller.

o For example, for the URL http://localhost:8080/login, routing will direct the request to SecurityController::login.

5 Controller:

o The controller is responsible for processing the application logic.

o It connects to the database through the appropriate repository, validates the data, performs CRUD operations and prepares the data for the view.

6 View:

o The controller passes data to the view (HTML/PHP file).

o The view generates the user interface based on the data passed by the controller.

7 JavaScript (optional):

o If the site contains JavaScript scripts, they can support additional interactivity, such as searching for teams, adding “likes”, validating forms, etc.

8 Browser:

o The browser receives the generated HTML, renders the page and displays it to the user.
## Description of the application by components

A web application using PHP, PostgreSQL and Docker consists of several key components. Below I provide a detailed description of each of these components and their role in the application.

1 Docker

Docker is used to containerize an application, making it easier to deploy and manage the environment. The application uses three containers:

- web (Nginx): Nginx server serving static files and passing PHP requests to the PHP container.

- php (PHP-FPM): A container serving application logic written in PHP.

- db (PostgreSQL): A PostgreSQL database container that stores application data.

2 Input point: index.php

- The index.php file is the entry point of the application. When a user visits a page, this file is the first to be run. It initiates routing by passing the user's URL to the routing system.

3 Routing
- The Routing class manages the application's routes (URL paths). It determines which controller and method should handle a given URL path.


4 Controllers

Controllers handle application logic, manage user sessions and interaction with models and views.

AppController

The base class for all controllers, containing auxiliary methods to handle HTTP requests, view rendering and redirection.

SessionController

Extends AppController, adding support for user sessions.

BandsController, BBController, DefaultController, SecurityController

Extend SessionController and support specific functionality, such as team browsing, account management, login, registration, etc.

5 Models

Models represent application data and business logic.

Band, BandPage, User

They define the data structure for bands and users and contain methods to manipulate this data.

6 Repositories

Repositories manage CRUD operations in the database.

Repository

The base class that provides the connection to the database.

BandRepository, UserRepository

Extend Repository and contain methods to retrieve, add, update and delete band and user data in the database.

7 Views

Views are HTML/PHP files that generate the user interface. Views use data passed through controllers to dynamically generate page content.

8 JavaScript

JavaScript scripts handle interactivity on pages, asynchronous operations and form validation.

9 PostgreSQL database

The database stores application data, such as user and team information. It is run in a Docker container.

Summary

The application runs in a cyclic fashion, where each user request starts with index.php, which initiates routing. Routing redirects the requests to the appropriate controllers, which handle the application logic, communicate with the database via repositories, and then render the appropriate views for the user. JavaScript scripts handle interactivity on the pages, and Docker provides environmental isolation and facilitates application deployment.
## 🛠 Skills
Backend: PHP 7.4 using a routing framework.

Frontend: HTML, CSS, JavaScript.

Database: PostgreSQL running in a Docker container.

Server: Nginx running in a Docker container.

Containerization: Docker and Docker Compose.


## Running Tests



1. Clone the repository from Github:

```
git clone https://github.com/maciekstrach01/IdolMeetApp
```

2. Create an .env file, which includes database connection details. Do not forget to add this details in constructor in class Database.php.

```
DB_NAME=
DB_USER=
DB_PASSWORD=
DB_HOST=
```
For example, this is what it looks like in my application

![11](https://github.com/maciekstrach01/IdolMeetApp/assets/146733279/f4a081e4-8dd7-4263-963c-6a5b287f3c7a)

![13](https://github.com/maciekstrach01/IdolMeetApp/assets/146733279/37200288-2ab7-423e-bbbd-4487a993ea93)

3. Install and open the Docker application.
Make sure you have deactivated all images in the application.

4. Open terminal and run commands:

```
docker-compose build
```

```
docker-compose up
```

5. After these commands in Docker, it should look to you like the following

![14](https://github.com/maciekstrach01/IdolMeetApp/assets/146733279/cd813c4e-9021-4063-8f0c-560323ddbbd4)
Access it by visiting http://localhost:8080 in your web browser.

6. Currently, we still need to execute 2 commands in the application terminal, because without them, when trying to register a user or an artist, we get the following error


![er](https://github.com/maciekstrach01/IdolMeetApp/assets/146733279/51b216f6-9ad6-4279-a3fa-55bc5fb79329)

So, in order to run this functionality in the terminal you need to type the following 2 commands.

```
docker cp "C:\Users\Maciek\Desktop\politechnika\6 semestr\PAI_PROJEKT\sql_data\script.sql" "pai_projekt-db-1:/script.sql"
docker exec -it pai_projekt-db-1 psql -U dbuser -d postgres -f /script.sql
```

Of course, you should remember to change the path to the script.sql file, as well as in the 2nd command to match the names of your own containers in Docker. To check them, you can enter the container directly in docker or in the terminal using the docker ps command.