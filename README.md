## About Laravel

After speaking to Evan during my initial interview I was excited and motivated to get into what Assurant had to offer. Evan mentioned something about heavy machinery equipment and he gave an example of a bobcat. I did a little research after the fact and noticed Assurant bought a company called EPG which specialized in the exact thing he mentioned. After researching them for a bit I saw a little bit of what they offered and decided to just make a quick api for something I may think to be in the right direction in regards to the potential type of duties I would have. It's simple but I wanted to write out my thought process between a potential task and executing it using Laravel, specifically using Laravel api. 

### Steps Taken
* Create backend Laravel app using Laravel Sail
* ran `sail php artisan make:model Industry -ms` to create Industry model as well as the migration for the table and the seeder to populate the data
* Altered industries table migration
* Did the same for ProductType, PurchaseType, PriceRange
* Ran `sail php artisan migrate` to run migrations to create tables
* Added seeders to DatabaseSeeder
* Ran `sail php artisan db:seed` to populate tables
* Created queryScopes on each Model to ensure we are only returning active records.
* Created routes in `routes/api.php`
* Did not add Controllers since this is just a simple fetch API. So, decided to just call the models directly from the route to keep it simple.
    * Also made sure to select only fields we actually want. We dont need `active` because it's already excluding them. 
* Ran the GET requests in Postman and confirmed the data was successfully being fetched
    * `localhost/api/product-types`
    * `localhost/api/purchase-types`
    * `localhost/api/industries`
    * 'localhost/api/price-ranges`
* Created InsuranceForm model and migration `sail php artisan make:controller InsuranceFormController --api;`
    * Did this after the fact in order to create foreign keys.
* Created InsuranceFormController to POST the form to table 
    * Created a api resource controller just in case it would ever need to be expanded.
    * Created route in `api.php`
    * `localhost/api/insurance-form`

### POST json to write to insurance_forms table

```
{
    "name": "Robert",
    "industry": 1,
    "product_type": 1,
    "purchase_type": 1,
    "price_range": 1
}
```



