# gambit-challenge
In this challenge I chose Option 2 which is to find a way to acccess the data in this case (input.txt) from backend, 
parse the data and present it to the frontend. Using mobile friendly UI design was aslo part of the challenge.

So I chose to use php scripting langauge as it is server side language which makes ideal for accessing data and 
reading files from the backend. With php it is also easy to make the data available for the frontend langauges like 
html,css and javaScript.

For the frontend I have used bootstrap CSS and JS liberaries and tried to create two diffent views of the data. 

1. in the first view I used column classes of bootstap to have a nice grid view of the data.
2. second view is just a table 

Both UI designs are responsive and mobile friendly.

important files to check are: 
1. index.php - default page containing view1
2. view2.php - contains the second view which 
3. header.php - consists of header and menu 
4. reader.php - php code which opens the text file containing data(time  + 100 first registers of tuf-2000M),
                reads strigns line by line from input file  and stores them in array. Finally parsing of the strings 
                in the register id and its corrosponding value.
5. style.css - custom css file to decorate the views
6. footer.php - contains footer content and JS scripting link tags


Here is a live demo what is done

www.mabinok.com/gambit-challenge

                   



