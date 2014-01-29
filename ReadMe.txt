This php script is used to format the contacts in csv or vcf file.


For example you may when you out of state you can't call your friends without appending a zero or +91 (in INDIA) to all the numbers you dial.
It is very tiresome to edit each one of them.
Using this script it all of them are formatted in single second and it saves your time also.(only for India)


Follow the steps as follows:
***If you have multiple .vcf files , first step is to combine it into a single vcf file by doing the following. 
1. Open command line interface (click Start > Run, or windows button + r and type cmd to launch it).
2. Navigate to the folder where multiple vCard files are by entering cd “D:\documents”, if the folder is your documents.
3. Enter command copy /a *.vcf combinedfile.vcf

*** Now you have the combined .vcf file.
*** Open the contacts_formatter.php file
*** if your input file name is not combinedfile.vcf change it accordingly in the 3rd line.
*** you can use .vcf or .csv formats but make sure the input and output file has same format that is either .csv or .vcf.
*** Run the PHP script in a server.To setup a local php server download xampp. run the apache server. Place the .php file in htdocs directory. And run it.

NJOY

for any queries contact ynos1234@gmail.com.