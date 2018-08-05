<?php
namespace App\DataFixtures;

use App\Entity\Applications;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class ApplicationFixtures extends Fixture
{
    public function load(ObjectManager $manager){

        $application = new Applications();
        $application->setName('Artificial Intelligence Quiz.');
        $application->setDescription('Wishing to enhance skills on Artificial Intelligence topics? Wishing to test your knowledge to determine level of Artificial Intelligence proficiency? Preparing for interviews? Preparing for entrance examinations? This quiz will be useful for all: Experienced, Freshers and Students. This quiz covers most of topics in Artificial Intelligence.');
        $application->setImg('Artificial_Intelligence_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Artificial-Intelligence-Quiz/dp/B018Y0S1VM/ref=sr_1_12?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-12');
        $application->setType('apps');
        $application->setDownloadCount (75);
        $manager->persist($application);


        $application = new Applications();
        $application->setName('C Language Quiz');
        $application->setDescription('Wishing to enhance skills on C Programming? Wishing to test your knowledge to determine level of C Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in C Programming.');
        $application->setImg('C_Language_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-C-Language-Quiz/dp/B0190PZPU0/ref=sr_1_33?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-33');
        $application->setType('apps');
        $application->setDownloadCount(49);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('C_#_MCQ');
        $application->setDescription('Wishing to enhance skills on C# Programming? Wishing to test your knowledge to determine level of C# Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in C# Programming.');
        $application->setImg('C_Sharp_MCQ.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-C-MCQ/dp/B018ZSK544/ref=sr_1_24?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-24');
        $application->setType('apps');
        $application->setDownloadCount(49);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('C++ Quiz');
        $application->setDescription('Wishing to enhance skills on C++ Programming? Wishing to test your knowledge to determine level of C++ Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in C++ Programming.');
        $application->setImg('C_++_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-C-Quiz/dp/B0191Z306A/ref=sr_1_31?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-31');
        $application->setType('apps');
        $application->setDownloadCount(49);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Cloud Computing Quiz');
        $application->setDescription('Wishing to enhance skills on Cloud Computing Subject? Wishing to test your knowledge to determine level of Cloud Computing? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Cloud Computing Subject.');
        $application->setImg('Cloud_Computing_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Cloud-Computing-Quiz/dp/B0190UQ496/ref=sr_1_23?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-23');
        $application->setType('apps');
        $application->setDownloadCount(50);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Computer Networks Quiz.');
        $application->setDescription('Wishing to enhance skills on Computer Networks? Wishing to test your Computer Networks knowledge? Preparing for interviews ? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students.');
        $application->setImg('Computer_Networks_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Computer-Networks-Quiz/dp/B0191QLFUW/ref=sr_1_19?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-19');
        $application->setType('apps');
        $application->setDownloadCount(53);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Computer Organization and Architecture Quiz.');
        $application->setDescription('Wishing to enhance skills on Computer Organization and Architecture? Wishing to test your Computer Organization knowledge? Preparing for interviews ? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students.');
        $application->setImg('Computer_Organization_and_Architecture_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Computer-Organization-and-Architecture-Quiz/dp/B0191J2P3K/ref=sr_1_32?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-32');
        $application->setType('apps');
        $application->setDownloadCount(52);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Data Science Quiz.');
        $application->setDescription('Wishing to enhance skills on Data Science subject? Wishing to test your knowledge to determine level of Data Science subject proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Data Science subject.');
        $application->setImg('Data_Science_Quiz.png');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Data-Science-Quiz/dp/B0193W0HUS/ref=sr_1_29?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-29');
        $application->setType('apps');
        $application->setDownloadCount(47);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Database Management Quiz.');
        $application->setDescription('Wishing to enhance skills on Database Management System programming? Wishing to test your knowledge to determine level of Database Management System proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Database Management System.');
        $application->setImg('Database_Management_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Database-Management-Quiz/dp/B01934CLTQ/ref=sr_1_36?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-36');
        $application->setType('apps');
        $application->setDownloadCount(43);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Digital Communication Test');
        $application->setDescription('Wishing to enhance skills on Digital Communication? Wishing to test your knowledge to determine level of Digital Communication proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students.');
        $application->setImg('Digital_Communication_Test.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Digital-Communication-Test/dp/B01BI8M7NU/ref=sr_1_17?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-17');
        $application->setType('apps');
        $application->setDownloadCount(61);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('English Grammar Quiz.');
        $application->setDescription('Improving your English speaking skills will help you communicate more easily and effectively. You\'ll make it easier for people to understand what you\'re saying, and your speech will flow more naturally. This quizz will help you test yourself and remember the new phrases. The test will include multiple choice questions. Each attempt you can answer 10 questions in random. After you finish the questions, you will see the review page and score sheet. If you have any questions or suggestions please let me know.');
        $application->setImg('English_Grammar_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-English-Grammar-Quiz/dp/B019264QX4/ref=sr_1_7?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-7');
        $application->setType('apps');
        $application->setDownloadCount(56);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('GRE Exam Preparation.');
        $application->setDescription('This application helps to prepare for GRE Exam(Verbal Section) and is useful for TOEFL Exam preparation. It has three different levels of difficulty:easy, intermediate and advanced.');
        $application->setImg('GRE_Exam_Preparation.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-GRE-Exam-Preparation/dp/B019CM3GVQ/ref=sr_1_14?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-14');
        $application->setType('apps');
        $application->setDownloadCount(61);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Guess the Day of the Week.');
        $application->setDescription('Can you manage to pull the day of the week out, past or present, no matter how far off a date is? Do you know the mental tricks you can use to wonder your friends with your uncanny ability to figure out any date_s day of the week. Test your skills and identify your strengths!');
        $application->setImg('Guess_the_Day_of_the_Week.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Guess-Day-Week/dp/B0196LLENU/ref=sr_1_15?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-15');
        $application->setType('apps');
        $application->setDownloadCount(44);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Guess the Flag.');
        $application->setDescription('This is geography quiz game where you will guess flags of given countries. The rules are simple. Click on the country name who\'s flag you see. At certain levels you get some bonuses.');
        $application->setImg('Guess_the_Flag.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Guess-the-Flag/dp/B019E4WNBG/ref=sr_1_18?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-18');
        $application->setType('apps');
        $application->setDownloadCount(58);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Guess The World Capitals.');
        $application->setDescription('Can you tell which capital belongs to which country? Do you know your world capitals? Geography quiz game will help you to familiarize yourself with world countries, looking at their pictures.');
        $application->setImg('Guess_The_World_Capitals.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Guess-World-Capitals/dp/B0190JT9XA/ref=sr_1_11?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-11');
        $application->setType('apps');
        $application->setDownloadCount(54);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Java Quiz.');
        $application->setDescription('Wishing to enhance skills on Java programming language? Wishing to test your Java knowledge? Preparing for interviews ? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test covers most of topics in Java. Enjoy :)');
        $application->setImg('Java_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Java-Quiz/dp/B019CS6MH0/ref=sr_1_20?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-20');
        $application->setType('apps');
        $application->setDownloadCount(51);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('JavaScript Programming MCQ.');
        $application->setDescription('Wishing to enhance skills on JavaScript Programming? Wishing to test your knowledge to determine level of JavaScript Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in JavaScript Programming.');
        $application->setImg('JavaScript_Programming_MCQ.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-JavaScript-Programming-MCQ/dp/B019AEMV7G/ref=sr_1_4?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-4');
        $application->setType('apps');
        $application->setDownloadCount(58);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Linux MCQ.');
        $application->setDescription('Wishing to enhance skills on Linux? Wishing to test your knowledge to determine level of Linux proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Linux .');
        $application->setImg('Linux_MCQ.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Linux-MCQ/dp/B01991W6VG/ref=sr_1_25?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-25');
        $application->setType('apps');
        $application->setDownloadCount(48);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Linux tutorial + quiz.');
        $application->setDescription('Wishing to enhance skills on Linux Environment&Administration? Wishing to test your Linux Programming knowledge? Preparing for interviews ? Preparing for entrance examinations? Linux tutorial covers various sections of process management, file management, signal handling, linux shell programming, awk programming, linux sysfs, GCC compiler, GDB debugger and so on. The test will include multiple choice questions. Each attempt you can answer 10 questions in random. After you finish the questions, you will see the review pageandscore sheet. This application will be useful for all: Experienced,Freshersand Students.');
        $application->setImg('Linux_tutorial_quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Linux-tutorial-quiz/dp/B019ADSVXU/ref=sr_1_5?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-5');
        $application->setType('apps');
        $application->setDownloadCount(76);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('LISP Programming Quiz.');
        $application->setDescription('Wishing to enhance skills on Lisp Programming? Wishing to test your knowledge to determine level of Lisp Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Lisp Programming');
        $application->setImg('LISP_Programming_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-LISP-Programming-Quiz/dp/B0193IUDR4/ref=sr_1_30?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-30');
        $application->setType('apps');
        $application->setDownloadCount(48);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Microprocessor Quiz');
        $application->setDescription('Wishing to enhance skills on Microprocessor? Preparing for interviews ? Preparing for entrance examinations? The test will include multiple choice questions. Each attempt you can answer 10 questions in random. After you finish the questions, you will see the review page and score sheet. This test will be useful for all: Experienced, Freshers and Students.');
        $application->setImg('Microprocessor_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Microprocessor-Quiz/dp/B018Z82KO2/ref=sr_1_16?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-16');
        $application->setType('apps');
        $application->setDownloadCount(55);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('MongoDB Quiz.');
        $application->setDescription('Wishing to enhance skills on MongoDB database? Wishing to test your knowledge to determine level of MongoDB database proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in MongoDB database.');
        $application->setImg('MongoDB_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-MongoDB-Quiz/dp/B019508X8Q/ref=sr_1_28?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-28');
        $application->setType('apps');
        $application->setDownloadCount(48);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('My Blackboard');
        $application->setDescription('My Blackboard turns your phone into a classical blackboard, where you can draw with colored chalks. You can email new images to your friends. You can view the gallery of your images.You can just save them. This application will be interesting to childeren :) You can just use this to play games like domineering, dots and boxes, sprouts, or etc. This application also may help you on exams :) This can be used as a tool for visual presentation of problems in different fields of engineering or science like drawing electrical engineering.');
        $application->setImg('My_Blackboard.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-My-Blackboard/dp/B019LN62AI/ref=sr_1_1?s=mobile-apps&ie=UTF8&qid=1531037876&sr=1-1');
        $application->setType('apps');
        $application->setDownloadCount(312);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('My Calculator.');
        $application->setDescription('"My Calculator" is a basic calculator for your every day needs. This calculator can assist you in calculating simple arithmetic. It has a clean and simple user interface and it is very easy to use. "My Calculator" is a lightweight application designed for everyone looking for simplicity and functionality. Two modes are available: do basic calculations in Portrait Mode or go advanced in Landscape Mode. Memory buttons will help you out with complex calculations.');
        $application->setImg('My_Calculator.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-My-Calculator/dp/B0196HMGDQ/ref=sr_1_27?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-27');
        $application->setType('apps');
        $application->setDownloadCount(49);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('My Contact List.');
        $application->setDescription('This application is designed for the following purposes: Add Contact Add Group Contact View Contact Details View SMS History View Call History View Contacts in Descending order Search Contact By Email Search Contact By Phone Send SMS Update Contact Email.');
        $application->setImg('My_Contact_List.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-My-Calculator/dp/B0196HMGDQ/ref=sr_1_27?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-27');
        $application->setType('apps');
        $application->setDownloadCount(115);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('My Memory: Train your memory');
        $application->setDescription('Train your brain! Play this game every day. Keep your brain in shape! Click on two tiles to find two matching pictures. You can choose among three different sets of images. Scores results are saved. Good luck :)');
        $application->setImg('My_Memory_Train_your_memory.jpg');
        $application->setUrl('https://www.amazon.com/My-Memory-Train-your-memory/dp/B019B0A9DM/ref=sr_1_34?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-34');
        $application->setType('apps');
        $application->setDownloadCount(45);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('My Mine Finder');
        $application->setDescription('"My Mine Finder" is a classic Minesweeper game. Rules are simple: Find the empty squares while avoiding the mines. The faster you clear the board, the better your score. There are available two modes in this application: easy mode and advanced mode.');
        $application->setImg('My_Mine_Finder.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-My-Mine-Finder/dp/B0198BCLYY/ref=sr_1_26?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-26');
        $application->setType('apps');
        $application->setDownloadCount(48);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('My Tic-Tac-Toe');
        $application->setDescription('This is an interactive game of good old fashioned tic-tac-toe! Plan ahead and beat the computer at tic tac toe. The game includes automatic scoring and alternating "first moves". You can save or share your scores via email or sms. Enjoy!');
        $application->setImg('My_Tic_Tac_Toe.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-My-Tic-Tac-Toe/dp/B0195LPMIE/ref=sr_1_13?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-13');
        $application->setType('apps');
        $application->setDownloadCount(65);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Operating System Quiz.');
        $application->setDescription('Wishing to enhance skills on Operating Systems? Wishing to test your knowledge to determine level of Operating Systems proficiency? Preparing for interviews? Preparing for entrance examinations?');
        $application->setImg('Operating_System_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Operating-System-Quiz/dp/B0198EX6FO/ref=sr_1_35?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-35');
        $application->setType('apps');
        $application->setDownloadCount(45);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('PHP Advanced MCQ.');
        $application->setDescription('Wishing to enhance skills on PHP Advanced Programming? Wishing to test your knowledge to determine level of PHP Programming proficiency? Preparing for interviews? Preparing for entrance examinations?');
        $application->setImg('PHP_Advanced_MCQ.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-PHP-Advanced-MCQ/dp/B0196WTS0U/ref=sr_1_21?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-21');
        $application->setType('apps');
        $application->setDownloadCount(51);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('PHP Programming MCQ.');
        $application->setDescription('Wishing to enhance skills on PHP Programming? Wishing to test your knowledge to determine level of PHP Programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in PHP Programming.');
        $application->setImg('PHP_Programming_MCQ.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-PHP-Programming-MCQ/dp/B0196QP1DY/ref=sr_1_10?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-10');
        $application->setType('apps');
        $application->setDownloadCount(53);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Python Quiz.');
        $application->setDescription('Wishing to enhance skills on Python programming language? Wishing to test your knowledge to determine level of Python programming proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Python programming.');
        $application->setImg('Python_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Python-Quiz/dp/B0196KA414/ref=sr_1_9?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-9');
        $application->setType('apps');
        $application->setDownloadCount(50);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Simple Timer.');
        $application->setDescription('This application is setting up a countdown timer, after you select the time from given list that you would like the application to count down from.');
        $application->setImg('Simple_Timer.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Simple-Timer/dp/B019FICYEC/ref=sr_1_8?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-8');
        $application->setType('apps');
        $application->setDownloadCount(130);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Software Architecture & Design Quiz.');
        $application->setDescription('Wishing to enhance skills on Software Architecture & Design? Preparing for interviews ? Preparing for entrance examinations? The test will include multiple choice questions. Each attempt you can answer 10 questions in random. After you finish the questions, you will see the review page and score sheet. This test will be useful for all: Experienced, Freshers and Students.');
        $application->setImg('Software_Architecture & Design_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Software-Architecture-Design/dp/B018W7HYXS/ref=sr_1_6?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-6');
        $application->setType('apps');
        $application->setDownloadCount(6);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Software Engineering Quiz.');
        $application->setDescription('Wishing to enhance skills on Software Engineering? Wishing to test your knowledge to determine level of Software Engineering proficiency? Preparing for interviews? Preparing for entrance examinations? This test will be useful for all: Experienced, Freshers and Students. This test includes most of topics in Software Engineering.');
        $application->setImg('Software_Engineering_Quiz.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Software-Engineering-Quiz/dp/B0195B1IIM/ref=sr_1_22?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-22');
        $application->setType('apps');
        $application->setDownloadCount(51);
        $manager->persist($application);

        $application = new Applications();
        $application->setName('Spell Checker.');
        $application->setDescription('Spell Checker application is designed to help you quickly find out the spelling and grammar mistakes and learn new words.');
        $application->setImg('Spell_Checker.jpg');
        $application->setUrl('https://www.amazon.com/Inna-Tarasyan-Spell-Checker/dp/B0198TUBBG/ref=sr_1_3?s=mobile-apps&ie=UTF8&qid=1531046218&sr=1-3');
        $application->setType('apps');
        $application->setDownloadCount(305);
        $manager->persist($application);

        $manager->flush();
    }
}