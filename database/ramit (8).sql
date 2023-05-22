-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 22, 2023 at 01:20 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramit`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `pswd` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pstion` varchar(25) NOT NULL,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `pswd`, `fname`, `mname`, `lname`, `pstion`, `filename`) VALUES
(1, 'Supervisor@supervisor.apc.edu.ph', '123', 'Admin', 'S.', 'Supervisor', 'supervisor', '1.png\r\n'),
(2, 'itroexample1@itro.apc.edu.ph', '321', 'Example', 'E.', 'ITRO', 'it', '2.png\r\n'),
(3, 'itroexample2@itro.apc.edu.ph', '321', 'ITRO2', 'E.', 'EXAMPLE', 'it', '3.png'),
(2020141242, 'ilflores@student.apc.edu.ph', 'wew', 'Ivan', 'L.', 'Flores', 'student', '2020141242.png\r\n'),
(2020141361, 'mezamora@student.apc.edu.ph', 'wews', 'Marc', 'Espina', 'Zamora', 'student', '2020141361.png');

-- --------------------------------------------------------

--
-- Table structure for table `cbr`
--

DROP TABLE IF EXISTS `cbr`;
CREATE TABLE IF NOT EXISTS `cbr` (
  `id` int NOT NULL AUTO_INCREMENT,
  `queries` varchar(500) NOT NULL,
  `replies` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cbr`
--

INSERT INTO `cbr` (`id`, `queries`, `replies`) VALUES
(0, 'I have an inquery | I have more inquiries | menu | HWC2', 'Hello, welcome to RAM-IT!                                                                                                         I am the ChatBot, I am here to provide a quick response to your inquiry.                                                                                                   Choose a category that best correlates to your inquiry <br> <br>      \r\nHello, welcome to RAM-IT!                                                                                                         I am the ChatBot, I am here to provide a quick response to your inquiry.                                                                                                   Choose a category that best correlates to your inquiry <br> <br>                                                                                                     (please input code as a response): <br>\r\nCODE - Name <hr>\r\nHW - Hardware<br>\r\nSW - Software<br>\r\nAC - Account<br>\r\nHE - Hyflex Equipment<br>\r\nBE - Borrowed Equipment<br>\r\nOT - Others                                                                                               '),
(1, 'hi | HI | hello | helo | hy | hey \r\n', 'Hello there!'),
(2, 'what is your name | what is your name? | who are you? | who are you | sino ka? | sino ka? | cnu ka? | cnu ka', 'I have no name at the moment...'),
(3, 'Rock | rock | ROCK | bato | Bato | BATO', 'Paper'),
(4, 'Paper | paper | PAPER | papel | PAPEL | Papel', 'Scissors'),
(5, 'scissors | Scissors | SCISSORS | scissor | Scissor | SCISSOR | gunting | GUNTING | Gunting', 'Rock'),
(6, 'HW', 'HWC = Hardware Choice \r\n<br>\r\n-	Type HWC1 for Yes, What hardware device do you have?\r\n<br>\r\n-	Type HWC2 for No, Wrong concern \r\n'),
(7, 'SW', 'What kind of inquiry do you have about Software?\r\n<br>\r\nSW1 – Why am I not yet in my subjects teams channel for the term?\r\n<br>\r\nSW2 – How do I install Verde?\r\n<br>\r\nSW3 – How do I install Cisco Packet Tracer?\r\n<br>\r\nSW4 – Why cannot I log into my Cisco account?\r\n<br>\r\nSW5 – How do I install Oracle VM Virtual Box?\r\n\r\n'),
(8, 'AC', 'What kind of inquiry do you have about Account\r\n<br>\r\nAC1 – Why cannot I access my LinkedIn account?\r\n<BR>\r\nAC2 – Where can I register online\r\n<BR>\r\nAC3 – Where can I enroll online?\r\n<br>\r\nAC4 – Where can I view my grades?\r\n<br>\r\nAC5 – Where can I evaluate my teachers?\r\n<br>\r\nAC6 – Where can I access the school library online\r\n<br>\r\nAC7 – Why cannot I log into my Cisco account?\r\n'),
(9, 'HE', 'What kind of inquiry do you have about Hyflex Equipment?\r\n<br>\r\nHE0 - My inquiry is not here.\r\n<BR>\r\nHE1 - There is a problem with my audio during class.\r\n'),
(10, 'BE', 'What kind of inquiry do you have about Borrowed Equipment?\r\n<br>\r\nBE0 - My inquiry is not here.\r\n<br>\r\nBE1 - The camera I borrowed is not saving the pictures that I take.\r\n'),
(11, 'WC', 'What kind of inquiry do you have about WiFi Connection?\r\n<br>\r\nWC1 - The WiFi is slow.\r\n<br>\r\nWC0 - My inquiry is not here.'),
(12, 'HW0 | SW0 | AC0 | HE0 | BE0 | WC0 | OT | no | n', 'Your inquiry may not be answerable by the ChatBot as of now, but you may head to RAM-ITs Ticketing System to ask help from one of our ITRO Specialist <a class = link href=http://localhost/ram-it/tadd.php?link=tadd> here... </a>'),
(13, 'goodbye | bye bye | bye | babush | paalam ', ' Goodbye and Thank you. Have a nice day! '),
(14, 'I am satisfied ', 'Thank you for using RAM-ITs ChatBot!'),
(16, 'HW1', 'Answers for, the PC is not turning on:\r\n<br>\r\n<a href=https://www.google.com/search?q=how+to+plug+in+a+computer&ei=LckGZKP9Bqum2roPyM-UkAc&oq=how+to+plug+in+your+compu&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAxgAMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB46BQgAEJECOgQIABBDOggIABCxAxCDAToICC4QsQMQgwE6CwguEIAEEMcBENEDOggIABCABBCxAzoFCAAQgAQ6EQguEIAEELEDEIMBEMcBENEDOgsIABCABBCxAxCDAToFCC4QgAQ6BQgAEIYDSgQIQRgAUABYjjJgzjtoAHABeACAAXuIAcURkgEEMjAuNZgBAKABAcABAQ&sclient=gws-wiz-serp#kpvalbx=_SMkGZNyGCb_W2roP6su9kAc_29>\r\n- Check the connections.\r\n</a>\r\n<br>\r\nDid that help?\r\nY - Yes\r\nN - No'),
(17, 'SW1', 'Step 1: Contact your assigned course \r\n<br>\r\ninstructor via team’s chat to clarify if:\r\n<br>\r\nA - they have not made the teams channel yet.\r\n<br>\r\nB - you are not yet enrolled to the subject.\r\n<br>\r\n- If A, please wait for further updates from your course instructor regarding the teams channel.\r\n<br>\r\n- If B, proceed to Step 2.\r\nStep 2: Contact the registrar office regarding your enrollment.\r\n<br>\r\nEmail: registrar@apc.edu.ph\r\nLandline: (0917) 830 4721\r\nCellphone: (0917) 812 2127\r\n'),
(18, 'AC1', 'There are three possible reasons why you are unable to access your LinkedIn Account:\r\n-	if you there is no access to your email address.  <a href=\" https://www.linkedin.com/help/linkedin/answer/a1377116/no-access-to-email-address?lang=en\"> Here.. </a>\r\n- if you cannot sign in to LinkedIn mobile app or mobile website.	 < https://www.linkedin.com/help/linkedin/answer/a520972/can-t-sign-in-to-linkedin-mobile-app-or-mobile-website?lang=en#:~:text=If%20you%20cant%20sign,of%20www.linkedin.com.> Click here </a>\r\n-	If you need to renew your registration to LinkedIn, please proceed to send a ticket to be able to receive a code from the ITRO that will enable you to renew your registration.'),
(19, 'HE1', 'Answers for, there is a problem with my audio during class:\r\n<br>\r\n- Check microphone connection.\r\n<br>\r\nDid that help?\r\nY - Yes\r\nN - No '),
(20, 'BE1', 'Answers for, the camera I borrowed is not saving the pictures that I take:\r\n<br>\r\n- Check if the camera has an SD card in it.\r\n<br>\r\nDid that help?\r\nY - Yes\r\nN - No '),
(21, 'WC1', 'Answers for, the WiFi is slow:\r\n<br>\r\n- Check if you are connected to the right WiFi that corresponds to the area you are in.\r\n<br>\r\nDid that help?\r\nY - Yes\r\nN - No '),
(22, 'Yes | Y', 'Do you still have any more inquiries? \r\nif you have still more inquiries type: menu '),
(23, 'SW2', 'be guided on how to download Verde. <a class = link href=https://www.ncomputing.com/verde-vdi/documentation/PDF/8.2/VERDE_Configuration_Planning_and_Installation_Guide.pdf> Here.. </a>'),
(24, 'SW3', 'if you are using Windows. <a class = link href=https://www.geeksforgeeks.org/how-to-install-cisco-packet-tracer-on-windows/> Here.. </a>'),
(25, 'SW4', 'There are two possible solutions to your inquiry. <a class = link href=if you are unable to login in to Cisco. <a href=\"https://www.cisco.com/c/en/us/about/help/login-account-help.html#~login \"> Click here </a> <br> Step 1 - Open up Cisco Packet Tracer. If not downloaded, please download first. <a href=\"https://www.geeksforgeeks.org/how-to-install-cisco-packet-tracer-on-windows/ \"> Click here </a> <br> if you are using Windows. <a href=\"https://www.geeksforgeeks.org/how-to-install-cisco-packet-tracer-on-linux/\"> here.. </a> if you are using Linux. <br>\r\nStep 2 - Press Skills for All option when being asked how to log in. <br>\r\nStep 3 - Choose continue with Cisco Networking Academy option. <br>\r\nStep 4 - Input account details. <br>\r\nIf all steps are successfully done, you are now successfully logged in.\r\n'),
(26, 'SW5', 'to be guided on how to download Oracle VM Virtual Box. <a class = link href=https://data-flair.training/blogs/install-virtualbox/> Here.. </a>'),
(27, 'AC2', 'Step 1: You need to first check in the APC Collegiate Calendar <a href=”https://www.apc.edu.ph/calendar/”> here.. </a> if registration is open. Please proceed if registration is open.\r\nStep 2: You can register online by logging into your account <a href=”https://signin.apc.edu.ph/login”>here.. </a>\r\nStep 3: At the left side of the Screen, under Registrar Transactions, click Registration.\r\nStep 4: Check the courses listed before clicking the button to register.\r\n '),
(28, 'AC3', 'Step 1: You can enroll online by logging into your account <a href=”https://signin.apc.edu.ph/login”>here… </a> \r\nStep 2: Click General Payment, then select purpose of payment.\r\nStep 3: Update student contact information.\r\nStep 4: Select payment option.\r\nStep 5: Enter amount before clicking Pay Now.\r\nStep 6: Pay through paynamics.\r\n '),
(29, 'AC4', 'Step 1: You can view your grades by logging into your account <a href=”https://signin.apc.edu.ph/login”> here.</a>\r\nStep 2: After logging in, you will find a tab on the left side where it says My Grades. Click the tab to view your grades.\r\n '),
(30, 'AC5', 'Step 1: You can evaluate your teachers by logging into your account  <a href=”https://ote.apc.edu.ph/login”> here.. </a> \r\nStep 2: Click the teacher you want to evaluate.\r\nStep 3: Fill in the fields before clicking done.\r\n '),
(31, 'AC6', 'You can access the APC’s online library through <a href=”https://library.apc.edu.ph/”>here.. </a>  '),
(32, 'AC7', 'There are two possible solutions to your inquiry.\r\n-	if you are unable to login in to Cisco.  <a href=”https://www.cisco.com/c/en/us/about/help/login-account-help.html#~login”> \r\n-	Click here </a> \r\n-	If the above solution does not work, try these steps:\r\nStep 1 - Open up Cisco Packet Tracer. If not downloaded, please download first.\r\n-	if you are using Windows. <a href=”https://www.geeksforgeeks.org/how-to-install-cisco-packet-tracer-on-windows/”>here..</a>\r\n-	if you are using Linux.\r\n-	<a href=”https://www.geeksforgeeks.org/how-to-install-cisco-packet-tracer-on-linux/”> Click here </a>\r\nStep 2 - Press Skills for All option when being asked how to log in.\r\nStep 3 - Choose continue with Cisco Networking Academy option.\r\nStep 4 - Input account details.\r\nIf all steps are successfully done, you are now successfully logged in.\r\n '),
(33, 'HWC1', '-	Type H1 for Laptop\r\n<br>\r\n-	Type H2 for Printer\r\n<br>\r\n-	Type H3 for Router\r\n<br>\r\n-	Type H4 for Smartphone / Tablet\r\n '),
(34, 'H1', '-	Type LT1 for: Program/s Running Slowly <br>\r\n-	Type LT2 for: Virus / Malware\r\n<br>\r\n-	Type LT3 for: Internet Connectivity Issues\r\n<br>\r\n-	Type LT4 for: Hard Drive / Storage Failure\r\n<br>\r\n-       Type LT5 for: Frozen Screen\r\n<br>\r\n-	Type LT6 for: Overheating\r\n<br> \r\n-	Type LT7 for: Unable to Install Programs\r\n<br>\r\n-	Type LT8 for: Blue Screen\r\n<br>\r\n\r\n'),
(35, 'LT1', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. <a class = link href=https://www.howtogeek.com/228570/10-quick-ways-to-speed-up-a-slow-windows-pc/> here... </a>'),
(36, 'LT2', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. As well as learning about different viruses. <a class = link href=https://www.avg.com/en/signal/how-to-get-rid-of-a-virus-or-malware-on-your-computer#:~:text=%231%20Remove%20the%20virus%201%20Enter%20Safe%20Mode,a%20Virus%20Scanner%204%20Run%20a%20Virus%20Scan> here... </a>'),
(37, '', ' '),
(38, 'LT3', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. <a class = link href=There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem.> here... </a>'),
(39, 'LT4', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. As well as preventing the problem to occur again. <a class = link href=There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. As well as preventing the problem to occur again.> here... </a>'),
(40, 'LT5', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. As well as preventing the problem to occur again. <a class = link href=There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. As well as preventing the problem to occur again.> here... </a>'),
(41, 'LT6', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. As well as preventing the problem to occur again. <a class = link href=There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. As well as preventing the problem to occur again.> here... </a>'),
(42, 'LT7', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem.  <a class = link href=https://www.makeuseof.com/tag/try-windows-software-wont-install/#:~:text=%5BSolution%5D%20Windows%20Software%20Wont%20Install%201%20Reboot%20Your,in%20Windows%2C%20your%20account%20only%20runs...%20See%20More.> here... </a>'),
(43, 'LT8', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem.  '),
(44, 'H2', '-	Type PR1 for: Printer won’t print <br>\r\n-	Type PR2 for: Printer won’t open<br>\r\n-	Type PR3 for: Printer prints too slow<br>\r\n-	Type PR4 for: Printer is experiencing paper jams<br>\r\n '),
(45, 'PR1', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. This solution is a general solution for printers, there can be different solutions from the different brands of printers. <a class = link href=There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. This solution is a general solution for printers, there can be different solutions from the different brands of printers.> here... </a>'),
(46, 'PR2', 'Step 1: Check if the plugs into the printer which is the power cord and into the outlet are inserted, if not, plug it in.\r\nStep 2: Open the Printer\r\n\r\nNote: You can troubleshoot this problem by using different outlets or different power cables \r\n '),
(47, 'PR3', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. This solution is a general solution for printers, there can be different solutions from the different brands of printers. <a class = link href=https://turtleverse.com/6-simple-tips-to-fix-slow-printing-speed-of-a-printer/#:~:text=Troubleshooting%20Tips%20to%20Fix%20Slow%20Printing%20Error%201,RAM%20...%206%206.%20Update%20%26%20upgrade%20> here... </a>'),
(48, 'PR4', 'There are a variety of solutions to this problem. Visit the given links below to follow and to know the troubleshooting methods to solve this problem.  <a class = link href=https://h30434.www3.hp.com/t5/Printer-Paper-Jams-Feed-Issues/printer-saying-paper-jam-when-there-is-none/td-p/8304694#:~:text=Dust%2C%20paper%20fiber%2C%20and%20other%20debris%20might%20accumulate,the%20printer%2C%20and%20then%20disconnect%20the%20power%20cord.> here... </a>'),
(49, 'H3', '-	Type RR1 for: Slow internet\r\n-	Type RR2 for: Devices can’t connect to the router\r\n-	Type RR3 for: Router has an access but no internet connection\r\n\r\n '),
(50, 'RR1', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. \r\n\r\n <a class = link href=https://www.howtogeek.com/341538/why-is-my-internet-so-slow/#:~:text=%5BSolution%5D%20Why%20is%20My%20Internet%20so%20Slow%201,Wi-Fi%E2%80%94which%20connects%20you%20to%20the%20internet%E2%80%94is...%20See%20More.> here... </a>'),
(51, 'RR2', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem.  <a class = link href=https://www.technewstoday.com/fix-cant-connect-to-this-network/#:~:text=Restart%20Your%20Computer%20and%20Your%20Network%201%20Turn,whether%20you%20can%20connect%20to%20the%20network%20now.> here... </a>'),
(52, 'RR3', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem.  <a class = link href=https://techwiser.com/wifi-connected-but-no-internet-access/#:~:text=Fix%20Wi-Fi%20Connected%20But%20No%20Internet%20Access%20Error,Obtain%20IP%20and%20DNS%20Automatically%20...%20More%20items> here... </a>'),
(53, 'H4', '-	Type SP1 for: The tablet won’t turn on\r\n\r\n-	Type SP2 for: Tablet isn’t charging\r\n\r\n-	Type SP3 for: The Touchscreen doesn’t work properly\r\n\r\n-	Type SP4 for: If the music is continuously playing\r\n\r\n-	Type SP5 for: WI-FI problems\r\n\r\n-	Type SP6 for: Battery draining too quickly\r\n\r\n-	Type SP7 for: Tablets get too hot\r\n '),
(54, 'SP1', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem.  <a class = link href=https://www.lifewire.com/fix-a-tablet-not-turning-on-5248457> here... </a>'),
(55, 'SP2', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem.  <a class = link href=https://www.lifewire.com/fix-tablet-not-charging-5248439\r\n> here... </a>'),
(56, 'SP3', 'There are a variety of solutions to this problem. Visit the given links below to follow and to know the troubleshooting methods to solve this problem.  <a class = link href=There are a variety of solutions to this problem. Visit the given links below to follow and to know the troubleshooting methods to solve this problem. > here... </a>'),
(57, 'SP4', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem.  <a class = link href=https://www.samsung.com/uk/support/mobile-devices/why-does-my-music-keep-playing-after-i-close-the-app/> here... </a>'),
(58, 'SP5', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. Methods below considers also to check on your routers. <a class = link href=https://support.google.com/android/answer/2651367?hl=en#zippy=%2Cfix-mobile-data-problems%2Cfix-wi-fi-problems> here... </a>'),
(59, 'SP6', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem.\r\n\r\n <a class = link href=https://us.norton.com/blog/mobile/why-is-my-battery-draining-so-fast> here... </a>'),
(60, 'SP7', 'There are a variety of solutions to this problem. Visit the link below to follow and to know the troubleshooting methods to solve this problem. Also to learn why a certain device gets to hot. <a class = link href=https://tabletzoo.com/why-does-my-tablet-get-hot/#:~:text=What%20Is%20The%20Solution%20For%20Getting%20Hot%3F%201,...%207%20Airplane%20Mode%20Can%20Reduce%20Heat%20> here... </a>');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `tid` int NOT NULL,
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `dtm` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`tid`, `id`, `name`, `position`, `msg`, `dtm`) VALUES
(1, 1, 'Admin Supervisor', 'supervisor', 'I have assigned Example ITRO to your ticket', '2023-03-06 22:53:51'),
(2, 2020141361, 'Marc Zamora', 'student', 'Nevermind ', '2023-03-07 12:11:28'),
(2, 2020141361, 'Marc Zamora', 'student', 'I didnt plug the charger correctly ', '2023-03-07 12:11:50'),
(2, 2020141361, 'Marc Zamora', 'student', 'that is why it aint charging', '2023-03-07 12:11:56'),
(2, 3, 'ITRO2 EXAMPLE', 'it', 'It is ok', '2023-03-07 12:12:34'),
(2, 3, 'ITRO2 EXAMPLE', 'it', 'if you are satisfied with the ticket I would suggest to close the ticket', '2023-03-07 12:13:00'),
(8, 2, 'Example ITRO', 'it', 'Hello whats supposed to be the problem', '2023-03-07 15:08:51'),
(8, 2020141242, 'Ivan Flores', 'student', 'I am satisfied', '2023-03-07 15:10:45'),
(10, 2, 'Example ITRO', 'it', 'hello', '2023-03-21 00:22:24'),
(10, 1, 'Admin Supervisor', 'supervisor', 'hello', '2023-03-21 00:23:00'),
(6, 2020141361, 'Marc Zamora', 'student', 'hello', '2023-03-21 15:00:36'),
(2, 2, 'Example ITRO', 'it', 'hello', '2023-03-23 00:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `tid` int NOT NULL AUTO_INCREMENT,
  `iid` int NOT NULL,
  `iname` varchar(100) NOT NULL,
  `ipstion` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `itype` varchar(50) NOT NULL,
  `inqry` text NOT NULL,
  `fdes` text NOT NULL,
  `stat` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `priority` int NOT NULL,
  `severity` int NOT NULL,
  `place` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `floor` int NOT NULL,
  `room` text NOT NULL,
  `filename` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `assignid` int NOT NULL,
  `aemail` varchar(255) NOT NULL,
  `aname` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `apstion` varchar(10) NOT NULL,
  `dt` datetime NOT NULL,
  `dta` datetime NOT NULL,
  `dtc` datetime NOT NULL,
  `notifstus` int NOT NULL,
  `notifstum` text NOT NULL,
  `notifits` int NOT NULL,
  `notifitm` text NOT NULL,
  `notifdts` datetime NOT NULL,
  `notifdti` datetime NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`tid`, `iid`, `iname`, `ipstion`, `email`, `img`, `itype`, `inqry`, `fdes`, `stat`, `priority`, `severity`, `place`, `floor`, `room`, `filename`, `assignid`, `aemail`, `aname`, `apstion`, `dt`, `dta`, `dtc`, `notifstus`, `notifstum`, `notifits`, `notifitm`, `notifdts`, `notifdti`) VALUES
(1, 1, 'Admin S. Supervisor', 'supervisor', 'supervisor@supervisor.apc.edu.ph', '1.png\r\n', 'Account', 'LinkedIn Accounts', 'I need a code to renew my registration for my LinkedIn account.', 'open', 2, 2, 'Outside', 0, '0', '', 2, 'itroexample1@itro.apc.edu.ph', 'Example E. ITRO', 'it', '2023-03-21 13:35:11', '2023-03-21 14:09:21', '0000-00-00 00:00:00', 0, 'The ticket# 1 has a new ITRO specialist assigned', 1, 'You are assigned to the ticket# 1', '2023-03-21 14:09:21', '2023-03-23 00:24:09'),
(2, 2020141242, 'Ivan L. Flores', 'student', 'ilflores@student.apc.edu.ph', '2020141242.png\r\n', 'Account', 'LinkedIn Accounts', 'I need a code to renew my registration for my LinkedIn account.', 'open', 2, 2, 'Outside', 0, '0', '', 2, 'itroexample1@itro.apc.edu.ph', 'Example E. ITRO', 'it', '2023-03-21 13:37:41', '2023-03-21 14:09:54', '0000-00-00 00:00:00', 0, 'New message in ticket# 2', 1, 'You are assigned to the ticket# 2', '2023-03-23 00:24:46', '2023-03-23 00:26:34'),
(3, 2020141242, 'Ivan L. Flores', 'student', 'ilflores@student.apc.edu.ph', '2020141242.png\r\n', 'Hyflex Equipment', 'Desktop', 'My webcam is not working.', 'open', 3, 4, 'Outside', 0, '0', '', 2, 'itroexample1@itro.apc.edu.ph', 'Example E. ITRO', 'it', '2023-03-21 13:38:34', '2023-03-21 14:13:34', '0000-00-00 00:00:00', 0, 'The ticket# 3 has a new ITRO specialist assigned', 0, 'You are assigned to the ticket# 3', '2023-03-21 14:13:34', '2023-03-21 14:13:34'),
(4, 2020141242, 'Ivan L. Flores', 'student', 'ilflores@student.apc.edu.ph', '2020141242.png\r\n', 'Borrowed Equipment', 'Camera', 'I do not have an SD Card for the camera I borrowed.', 'closed', 3, 4, 'On-Premise', 2, '208', '', 2, 'itroexample1@itro.apc.edu.ph', 'Example E. ITRO', 'it', '2023-03-21 13:39:23', '2023-03-21 14:17:36', '2023-03-21 14:18:10', 1, 'The ticket# 4 has a new ITRO specialist assigned', 0, 'The ticket# 4 is now closed the inquirer is satisfied with the ticket.', '2023-03-21 14:18:08', '2023-03-21 14:18:10'),
(5, 2020141242, 'Ivan L. Flores', 'student', 'ilflores@student.apc.edu.ph', '2020141242.png\r\n', 'Account', 'LinkedIn Accounts', 'I can not open my account.', 'pending', 2, 2, 'Outside', 0, '0', '', 0, '', '', '', '2023-03-21 13:41:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Ivan L. Flores submitted a new ticket', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2020141361, 'Marc Espina Zamora', 'student', 'mezamora@student.apc.edu.ph', '2020141361.png', 'Software', 'Microsoft Teams', 'I cannot access my MS teams', 'closed', 2, 4, 'Outside', 0, '0', '', 2, 'itroexample1@itro.apc.edu.ph', 'Example E. ITRO', 'it', '2023-03-21 13:43:34', '2023-03-21 14:11:03', '2023-03-23 00:19:15', 1, 'The ticket# 6 has a new ITRO specialist assigned', 0, 'The ticket# 6 is now closed the inquirer is satisfied with the ticket.', '2023-03-23 00:19:52', '2023-03-23 00:19:15'),
(7, 2020141361, 'Marc Espina Zamora', 'student', 'mezamora@student.apc.edu.ph', '2020141361.png', 'Software', 'Others', 'Is photoshop provided by the school?', 'pending', 2, 1, 'Outside', 0, '0', '', 0, '', '', '', '2023-03-21 13:52:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Marc Espina Zamora submitted a new ticket', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 2020141361, 'Marc Espina Zamora', 'student', 'mezamora@student.apc.edu.ph', '2020141361.png', 'Account', 'APC Websites', 'Can I download online books from the APC Library? If so, how do I download them?', 'pending', 2, 4, 'Outside', 0, '0', '', 0, '', '', '', '2023-03-21 13:53:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Marc Espina Zamora submitted a new ticket', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 2020141361, 'Marc Espina Zamora', 'student', 'mezamora@student.apc.edu.ph', '2020141361.png', 'Hardware', 'Projector', 'The projector is not working.', 'open', 2, 5, 'On-Premise', 2, '208', '', 2, 'itroexample1@itro.apc.edu.ph', 'Example E. ITRO', 'it', '2023-03-21 13:55:15', '2023-03-21 14:12:13', '0000-00-00 00:00:00', 0, 'The ticket# 9 has a new ITRO specialist assigned', 0, 'You are assigned to the ticket# 9', '2023-03-21 14:12:13', '2023-03-21 14:12:13'),
(10, 2020141361, 'Marc Espina Zamora', 'student', 'mezamora@student.apc.edu.ph', '2020141361.png', 'Hardware', 'Desktop', 'Can I use a computer inside the classroom? If so, how can I reserve it?', 'pending', 2, 4, 'On-Premise', 5, '509', '', 0, '', '', '', '2023-03-21 13:56:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Marc Espina Zamora submitted a new ticket', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 2020141361, 'Marc Espina Zamora', 'student', 'mezamora@student.apc.edu.ph', '2020141361.png', 'Borrowed Equipment', 'Drawing Tablet', 'Does the ITRO lend drawing tablets?', 'open', 3, 3, 'On-Premise', 8, '808', '', 2, 'itroexample1@itro.apc.edu.ph', 'Example E. ITRO', 'it', '2023-03-21 13:58:38', '2023-03-21 14:12:34', '0000-00-00 00:00:00', 0, 'The ticket# 11 has a new ITRO specialist assigned', 0, 'You are assigned to the ticket# 11', '2023-03-21 14:12:34', '2023-03-21 14:12:34'),
(12, 2020141361, 'Marc Espina Zamora', 'student', 'mezamora@student.apc.edu.ph', '2020141361.png', 'Software', 'VM Virtual Box', 'My VM VirtualBox is not working.', 'open', 2, 4, 'On-Premise', 8, '806', '', 3, 'itroexample2@itro.apc.edu.ph', 'ITRO2 E. EXAMPLE', 'it', '2023-03-21 13:59:58', '2023-03-21 14:10:46', '0000-00-00 00:00:00', 0, 'The ticket# 12 has a new ITRO specialist assigned', 0, 'You are assigned to the ticket# 12', '2023-03-21 14:10:46', '2023-03-21 14:10:46'),
(13, 2020141361, 'Marc Espina Zamora', 'student', 'mezamora@student.apc.edu.ph', '2020141361.png', 'Hardware', 'Others', 'I need wires for a subject. Do you have wires that I can use?', 'pending', 2, 2, 'On-Premise', 9, '903', '', 0, '', '', '', '2023-03-21 14:01:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Marc Espina Zamora submitted a new ticket', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 2020141361, 'Marc Espina Zamora', 'student', 'mezamora@student.apc.edu.ph', '2020141361.png', 'Hardware', 'Projector', 'The projector is not working.', 'open', 2, 5, 'On-Premise', 12, 'Atrium', '', 3, 'itroexample2@itro.apc.edu.ph', 'ITRO2 E. EXAMPLE', 'it', '2023-03-21 14:02:50', '2023-03-21 14:11:55', '0000-00-00 00:00:00', 0, 'The ticket# 14 has a new ITRO specialist assigned', 0, 'You are assigned to the ticket# 14', '2023-03-21 14:11:55', '2023-03-21 14:11:55'),
(15, 2020141242, 'Ivan L. Flores', 'student', 'ilflores@student.apc.edu.ph', '2020141242.png\r\n', 'Hyflex Equipment', 'Webcam', 'My webcam is not working.', 'open', 3, 5, 'On-Premise', 5, '510', '', 3, 'itroexample2@itro.apc.edu.ph', 'ITRO2 E. EXAMPLE', 'it', '2023-03-21 14:04:45', '2023-03-21 14:11:39', '0000-00-00 00:00:00', 0, 'The ticket# 15 has a new ITRO specialist assigned', 0, 'You are assigned to the ticket# 15', '2023-03-21 14:11:39', '2023-03-21 14:11:39'),
(16, 2020141361, 'Marc Espina Zamora', 'student', 'mezamora@student.apc.edu.ph', '2020141361.png', 'Hardware', 'Desktop', 'I cant somehow open the my desktop', 'pending', 2, 4, 'On-Premise', 9, '908', '', 0, '', '', '', '2023-03-21 14:35:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'Marc Espina Zamora submitted a new ticket', 0, '', '2023-03-23 00:18:23', '0000-00-00 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
