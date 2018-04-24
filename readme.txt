V 1.0   -   2018-01-22   -   Initial release
V 1.1   -   2018-01-29   -   Typo fixes. Added hints for PHP newcomers.

This package contains an app for viewing, saving and importing products. A catalog app basically.
Many of the features are missing and you, dear skilled programmer, have to implement them.


To begin on this task you will need

- A web server which is able to execute PHP. The choice is yours.
- A database server. Using MySQL is suggested as it allows you to easily import the provided schema without changes.


After you have fulfilled the above requirements

- You should first get the index.php to show up in your browser.

- After that create a database called banana_kiosk and import the banana_kiosk.sql into the database. You will also need to create the database user bananaman and give the user read and write permissions. Queries to create these do not need to be included in the returned assignment. You may also use any available database tools to achieve this task.

- To get accustomized with your database, you will have to add a new "price" field to the product table. Copy the query you used to do this into banana_kiosk_migrate.sql

- Start implementing features in the order specified by the index.php page.

- Once all TODOs are done, compress the banana_kiosk directory into a zip archive and deliver it to the address provided to you earlier.


About grading:

The CSVs provided in this package contain some rather special product names and these should not be modified. These will test your knowledge of data encodings and proper escaping. By using PHP's inbuilt features, the product names can be written to the database and printed onto a web page without any issues. Clearly invalid rows (no price or name) can be safely discarded, but the app must be able to import all the valid rows in all the CSV files.

To verify all the CSVs were imported correctly, it is suggested that you open the CSVs in a text editor, or mark all the fields as text when opening the file in any spreadsheet programs such as OpenOffice. Otherwise the price column may show up wrong. Some files are also encoded in UTF-8 and some in ISO-8859-1 so change the encoding in your editor as required.
