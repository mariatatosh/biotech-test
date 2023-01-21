#         

----------

## Installation using [Docker](https://www.docker.com)

Clone the repository and switch to the repository folder

    git clone git@github.com:mariatatosh/biotech-test.git && cd biotech-test

Install all the dependencies using composer and npm

    make dependencies-install

Copy the example env file and make the required configuration changes in the .env file

    make copy-env

Run the database migrations and seeders

    make migrations-run
    make seeders-run

Start the local development server

    make init

Start the local development server

    make up

You can now access the server at http://localhost:8080

**TL;DR command list**

    git clone git@github.com:mariatatosh/biotech-test.git && cd biotech-test
    make dependencies-install
    make copy-env
    make migrations-run
    make seeders-run
    make init

----------

## API

### Public Access

| **URI** 	       | **Method**              	 | **Description**            	 |
|-----------------|---------------------------|------------------------------|
| `/`      	      | GET     	                 | Create payment page 	        |
| `/` 	           | POST    	                 | Store payment action      	  |
| `/login`      	 | GET 	                     | Login page   	               |

### Private access (only admin and manager)

| **URI** 	                       | **Method**              	 | **Description**            	                   |
|---------------------------------|---------------------------|------------------------------------------------|
| `/admin/payments`      	        | GET     	                 | Payment list page 	                            |
| `/admin/payments/create`      	 | GET 	                     | Create payment page   	                        |
| `/admin/payments`      	        | POST 	                    | Store payment action   	                       |
| `/admin/payments/{id}/edit` 	   | GET    	                  | Edit payment page      	                       |
| `/admin/payments/{id}` 	        | PATCH    	                | Update payment action      	                   |
| `/admin/payments/{id}` 	        | DELETE    	               | Destroy payment action (Only for Admin)      	 |

----------

## Default Users

| **Role** 	   | **Email**              	 | **Password**            	 |
|--------------|--------------------------|---------------------------|
| User      	  | user@gmail.com     	     | password 	                |
| Admin      	 | admin@gmail.com 	        | password   	              |
| Manager 	    | manager@gmail.com    	   | password      	           |

----------

## Dependencies

- [laravel/ui](https://github.com/laravel/ui) - Using for Auth UI starter kit
- [propaganistas/laravel-phone](https://github.com/barryvdh/laravel-cors) - Using for validate a phone number

----------

## Makefile commands

- `init` - Up local development server in first time
- `up` - Up local development server
- `restart` - Restart local development server
- `down` - Down all docker containers
- `stop` - Stop all docker containers
- `copy-env` - Copy the example env file
- `dependencies-install` - Install dependencies
- `migrations-run` - Running migrations
- `seeders-run` - Running all seeders


