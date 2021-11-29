-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2021 at 07:13 PM
-- Server version: 5.7.27
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kohliga_blogg`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `Fullname`, `Email`, `Username`, `Phone`, `Message`, `Country`, `Role`, `Password`, `Created_at`) VALUES
(1, 'Seniors Hive', 'seniorshive@gmail.com', 'seniorshive', '8521966680', 'http://seniorshive.com/', 'IN', 'Admin', '$2a$04$hYV/zVp9K08HRWf6bjRmEORHFknDvIspJuH9DWe0d9eyh9y4XLfAi', '2018-09-03 08:05:33'),
(4, 'Ankit Kaushal', 'ankitkaushal882@gmail.com', 'ankit', '6207994778', 'Hi', 'IN', 'Admin', '$2a$04$cAUYJoM2A7cYdCbk5l88BOXEgKrSQQ1cI4FmwM4YXyoWLw6zqqWy2', '2021-08-04 18:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `Post_ID` int(11) NOT NULL,
  `Post_Tag` varchar(256) NOT NULL,
  `Post_Title` text NOT NULL,
  `Post_Feature_Image` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `Post_Content` text NOT NULL,
  `Posted_By` int(11) NOT NULL,
  `Post_Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`Post_ID`, `Post_Tag`, `Post_Title`, `Post_Feature_Image`, `Post_Content`, `Posted_By`, `Post_Date`) VALUES
(6, '15', 'Best way to keep yourself engaged during pandemic as a senior citizen?', 'http://www.blog.355668.xyz/Admin/plugins/images/BlogImages/610920e85087f610920e8508c3.jpg', '<p>This pandemic has brought about a lot of changes in our daily life. One of the most significant changes is to learn to live alone or isolated from the rest of the world. This new practice may not be affecting the working class but has created a drastic impact on a specific group, senior citizens in particular. Due to the severe risk imposed by COVID-19 on elders, they are forced to cut down their usual routine by not meeting their acquaintances or moving freely outside. Hence, it becomes very hard for them to control their emotions within the four walls. So, to make them relieve themselves from this emotional difficulty, we can help them by following a few simple steps.</p>\r\n\r\n<p>The pandemic makes it necessary for everyone to follow all the safety measures as instructed by the health authorities. So, it has to be made sure that the senior citizens are practising all the measures correctly. Proper help has to be offered whenever required so that they can stay indoors and take care of themselves.</p>\r\n\r\n<p>After the pandemic, everyone is quite conscious about building their immunity and physical wellness. But along with that psychological wellness also has to be improved, especially for the seniors by engaging them in some activity that will help them divert their thought towards something productive. Thus, making them able enough to control their emotional state.</p>\r\n\r\n<p>Now to help them get involved in something, we can actually help them connect with their acquaintances as they used to do but in the virtual mode. By connecting them socially, we take them to their pre-covid days. For this online games, chat sessions, online tea-party etc., could be arranged. It may also be that a virtual family reunion can be set up wherein they will feel cordial after meeting their loved ones online.</p>\r\n\r\n<p>These ideas can be used within your family members or even with anybody whom you know from your neighbourhood too. If you know someone who is a senior citizen and is living alone, it is necessary to make sure that you are in touch with that person on a regular basis and get to know about their feelings, issues and needs and you can offer a helping hand by understanding them, especially their emotions.</p>\r\n', 1, '2021-10-30 11:00:18'),
(7, '14', 'Why awareness of mental health is important?', 'http://www.blog.355668.xyz/Admin/plugins/images/BlogImages/6109223a37a9d6109223a37ade.jpg', '<p>A happy mind is necessary to have a healthy body. People are very much concerned about keeping themselves physically fit but do not give the same level of importance in keeping their mind healthy. This is a common problem seen in senior citizens who face a lot of psychological issues. This is due to the lack of awareness about the importance of mental health among the people. The main reason which can attribute to this present condition is that mental health has been considered equally important as physical health during the recent times. Even before the last 2 decades, it was treated by people that mental weakness is an uncurable illness and was portrayed as a big issue. But in reality, due to lack of awareness, people are having this misconception. This is just a condition which can be completely cured by treating them well. Especially people who are aged above 60 years are having chances to face problems such as dementia, mood disorders and depression at the same level as there could be a risk of having diabetes, hearing loss or any other aging problems.</p>\r\n\r\n<p>Due to lack of awareness, people do not take due care while such problems are at its initial stage. Due to this negligence, further problems could also lead to extreme conditions of anxiety, prolonged depression, change in appetite and weight, loss of interest towards everything, memory loss, social withdrawl, other unexplainable physical problems and the list goes on. Due to hesitation of not consulting a specialist concerning about their social status, many people ignore the symptoms and land up at a stage where it might at its severity.</p>\r\n\r\n<p>If proper awareness campaigns are conducted by the geriatrics department of good hospitals along with the government&rsquo;s support, at least a change in the meaning given to these problems could be differentiated in the people&rsquo;s mind to some extent. Only then people will have the basic understanding that if and only if the mind is healthy, the whole body can be healthy. A lot of health issues can be prevented and also the severity of many health conditions can be modified. So it is necessary for everyone to consider this as a serious concern and take all the required steps to have a better living.</p>\r\n', 1, '2021-10-30 17:08:45'),
(11, '17', 'Financial planning and its necessity in a senior citizenâ€™s life.', 'http://www.blog.355668.xyz/Admin/plugins/images/BlogImages/6109269fa8e866109269fa8ed0.jpg', '<p>As far as an individual is concerned, he would be intending to make a financial plan for his family during his employable age along with setting aside some portion of his earnings as savings for his retirement life. But one most common mistake any individual would commit is that he will never use his savings to earn more money from it during the retirement life. Keeping the funds idle at any point of time is not a good practice. It is a proven fact that by the time of retirement, an individual will be free from almost all the responsibilities of life and hence this is an advantage for that individual who is now a senior citizen to use some part of his idle funds to get some good returns out of it by making proper investments. When a senior citizen is told to think about investments, the first and foremost idea which would arise in mind is a Fixed Deposit and similar saving plans. But the actual fact is here is that FDs and related investments give lesser returns and at the same time cannot be considered as fully safe unless and until dependent on a nationalised bank. After all, banks are just selling their products by making us deposit our money with them. However, compared to this, there are a lot newer schemes and options for senior citizens to get good earnings out of their investments.</p>\r\n\r\n<p>Let us have a look at few of them.</p>\r\n\r\n<ul>\r\n	<li>Pension4Life Plan by Canara HSBC Oriental bank of Commerce Life Insurance.</li>\r\n</ul>\r\n\r\n<p>This is a saving plan where the individual can get the returns in the form of annuity i.e., a fixed amount which we will receive on investing a lumpsum during a fixed period of time either monthly, quarterly, half-yearly or annually based on the individual&rsquo;s preference. This plan provides a lifetime guaranteed income where he can make the initial investment anytime between the age 45 to 80 years.&nbsp; There are several variations in this plan and an individual can select the best plan based on the suitability. With this initial investment is safe while regular annuities are received at a higher scale.</p>\r\n\r\n<ul>\r\n	<li>Senior Citizens Saving Scheme by LIC</li>\r\n</ul>\r\n\r\n<p>This scheme is available for a senior citizen for a period of 5 years which can further be extended for additional 3 years on maturity. A maximum of 15 lakhs can be deposited under scheme with an interest rate of 8.3% which is higher rate of FD and is taxable. The interest income can be received on a quarterly basis. An option to withdraw the money before its maturity is also possible.</p>\r\n\r\n<ul>\r\n	<li>Pradhan Mantri Vaya Vandhan Yojana (PMVVY)</li>\r\n</ul>\r\n\r\n<p>This scheme is more or less similar to SCSS but has slight changes in its nature like the period of maturity is fixed at 10 years with an interest rate of 8% per annum making it more prone to interest rate risk. Unlike SCSS which has a fixed quarterly pay-out basis, PMVVY has given the flexibility to the investor to opt for the pay-out frequency on a monthly, quarterly, half-yearly or annual basis. Though the maximum investible amount is 15 lakhs for both these schemes, SCSS has higher liquidity i.e., it is easy to have a pre-mature closure of the scheme but PMVVY is suitable for those who are looking for a regular income.</p>\r\n\r\n<ul>\r\n	<li>Monthly Income Plans (MIPs) &amp; Fixed Maturity Plans (FMPs) of Mutual Funds</li>\r\n</ul>\r\n\r\n<p>MIPs are a safe option of mutual fund investment because it is a hybrid fund with major portion of the investment being done in government debt and the remaining in equities, thus reducing the risk, while the pay-out is done on a monthly basis. At the same time, FMPs are done at a longer period of time starting at 366 days. The comparative advantage of this debt fund is that it gives assured returns along with tax benefits because the tenure of the FMP is same as the debt and hence it will give the benefit of indexation and higher holding period.</p>\r\n\r\n<ul>\r\n	<li>Tax free bonds by government companies</li>\r\n</ul>\r\n\r\n<p>These bonds are mainly issued by a few infrastructure companies to raise funds at market rate with government subsidy. These companies include NHAI, IRFC, IRCON etc. As the name suggests, the interest rate is free from tax liability, hence TDS will not be applicable in this case. Due to the very same reason, the interest rate is slightly lower at 6% with longer maturity period and low liquidity. Interest income will be paid on an annual basis.</p>\r\n\r\n<p>There are many more conventional as well as neo investment techniques which are useful for senior citizens also but are mostly unexplored by them. So, the elderly citizens are required to select the suitable form of investment post-retirement.</p>\r\n', 1, '2021-10-29 11:21:03'),
(12, '14', 'Importance of Health Insurance', 'http://www.blog.355668.xyz/Admin/plugins/images/BlogImages/610927003c750610927003c792.png', '<p>Health is a very important factor in everyone&rsquo;s life. Being healthy is very necessary and it is required to know that health insurance has a vital role in an individual&rsquo;s life because spending on our health is a costly affair. At this juncture if we can make a wise investment by obtaining a health insurance will reduce the financial burden caused by such expenditure. Now, it is very important to note that, health insurance plays a bit more significant role in a senior citizen&rsquo;s life because of the simple reason that an individual who is above 60 years of age is more prone to various health conditions and at that same time they may not have a steady income during this phase of life. So, managing these expenses becomes difficult. If a person is planning to set up a systematic financial profile for himself as well as his family, it is required to understand that, along with any other investment, an individual should definitely set aside some portion of his money for health insurance also. In India, according to the guidelines provided by the regulatory body of all insurance policies, Insurance Regulatory Authority of India (IRDA), an individual can enter into any health insurance plan till a maximum of 65 years. So, this tells us that, there is ample time for an individual to think and plan a wise profile including a health insurance policy too.</p>\r\n\r\n<p>Now, let u see the various benefits such a policy holds so that it will justify its importance clearly. If a policyholder enters into a health insurance policy, he can enjoy the benefit of protecting himself from any kind of unexpected or accidental financial costs because he will get all his expenses reimbursed through the policy he holds. With this there is no need for him take that burden. Also, most of the hospitals provide a cashless billing system with a senior citizen where if he is a policyholder, he need not pay any amount during the hospital stay. Instead, all the bills would be claimed directly from insurer. It is to be noted that though an individual can enter into this contract till the age of 65 years, after that he is given an option to renew the policy till the age of 80 or sometimes 90 years of his life based on the insurance company&rsquo;s policy rules as well as the pattern of premium payment and its frequency. The next notable benefit is the tax compliance because an individual can claim a deduction in the tax liability under section 80D. There are a few added benefits like, fortunately if a policyholder did not have to claim his policy during the previous year, then he may get a &lsquo;Non-Claim Benefit&rsquo; where either there is a reduction in the premium amount or may get a reimbursement of health check-up expenses for every 3 to 4 years as a &lsquo;No Claim&rsquo;.</p>\r\n\r\n<p>However, it is also to be noted that, if an individual has to get all the benefits he intends to, then it is required by him to read all the guidelines and rules as stated by the company with regards to a policy in detail before entering into it. He must ensure that he gets all the benefits in terms of the various types of hospitalization expenses that is covered under the policy are fair or not. Few of them include, doctor visits, medication costs, surgery expenses, pre and post hospital cover, any inclusions mentioned as such like day care expenses etc., based on the limit of the plan. Also, a proper check on the renewability and co-payments guidelines carefully. Co-payments refer to the percentage of money which the person has to pay from his side apart from the Mediclaim to cover the hospital expenses. Above all, each and every plan or policy has its own features, it is the duty of an individual to properly understand what he needs and what he will be provided by each and every insurance company. If there is a proper connection between these two factors, then it turns out to be an ideal insurance policy for that individual.</p>\r\n\r\n<p>Always considering all these criteria while taking a decision will be more helpful for a senior citizen than any group of people.</p>\r\n', 1, '2021-10-29 17:01:32'),
(13, '17', 'What to look for in a retirement home?', 'http://www.blog.355668.xyz/Admin/plugins/images/BlogImages/6199117c2cd4c6199117c2cd9a.jpg', '<p>How to decide on your ideal retirement home is always a tricky question. As with any important decision, one has to weigh the pros and cons of the available options and arrive at the most suitable one taking into account the financial cost involved.</p>\r\n\r\n<p>First, it is very important to analyse the reason one is choosing a retirement home. The expectation is that it should be much more than the home you are living at present. You are expecting an emotionally supportive network which provides more opportunities to socialize and also have access to conveniences that fit your lifestyle and spending plan.</p>\r\n\r\n<p>Your hunt starts by understanding the sorts of retirement networks and levels of care offered (services) at each one. Location might be important to few who would like to spend time with their children who stay in the same city. However, elders, in particular whose children are abroad and might be visiting them only during vacations, would be more inclined to take a decision based on the experience the retirement home promises to deliver than the location.</p>\r\n\r\n<p>The primary decision criteria most of the time is the financing cost and the services provided. It is important to look into the quality of services provided rather than just figuring out whether all your necessary conveniences are taken care of. It is imperative that you connect with some of the residents and get a genuine opinion as they are more likely to share an honest opinion and guide you better.</p>\r\n\r\n<p>One of the criteria mostly overlooked is to understand whether you fit the culture of the particular retirement home. Some people prefer very sophisticated lifestyle whereas others may not be comfortable with it. In some cases where children are the decision makers, they decide depending on their aspirations rather than considering their parent&rsquo;s comfort in fitting into a particular culture. It is extremely tough for elders to change their approach to life at their age. Hence, it must be carefully analysed whether the society they decide to get into is something they are comfortable with.</p>\r\n', 1, '2021-11-20 15:17:16'),
(14, '17', 'Importance of writing a will in the life of a senior citizen.', 'http://www.blog.355668.xyz/Admin/plugins/images/BlogImages/619912034d776619912034d7bb.jpg', '<p>An individual is considered to be the luckiest person if he is financially sound. The term financially sound refers to the level of planning he has undertaken in his life to take care of his finances right from his young age. However, it is very much important for every individual to properly plan his finances not only for his lifetime but also after his death well in advance. To make sure that one&rsquo;s assets are taken care of in the proper hands, one has to fulfil a very important responsibility i.e., to prepare a legal document which includes all the crucial information regarding the inheritance of the property or assets in his possession in order to avoid unnecessary confusion and complication. The amount of wealth a person possesses never becomes a criterion for making this legal document.</p>\r\n\r\n<p>This legal document is called as a will and it contains all the details regarding how one&rsquo;s assets and properties have to be distributed among his heirs or loved ones according to the individual&rsquo;s interest. It is a matter of fact that most of the people do not have proper awareness about how important a will is in anybody&rsquo;s life and it is commonly seen that people either do not make a will or may just make a nomination to an immediate heir. But both these practises are not right because a will has the power to give the whole possession to the intended parties unlike just giving the right to hold the property as in a nomination.</p>\r\n\r\n<p>A will contains all the details about the person himself, all his assets, the person who is responsible for executing the will after the party&rsquo;s death, the beneficiaries who would be possessing the assets along with the signature of the person making the will as well as 2 witnesses. While coming to the next step i.e., registration of this will, it is to be noted that it is not a mandate according to the Judicial system to register a will because it is a valid document in either of the cases. Also, it is possible to make necessary amendments to a will during the lifetime any number of times because the most recently amended version of a will only will be considered as valid.</p>\r\n\r\n<p>So, to make a proper will, one has to consult a lawyer who will make the process easy. Also, it is necessary to make a will when the person is in appropriate state of mental and physical health because only then it stands valid. By doing this family disputes could be reduced to an extent.</p>\r\n', 1, '2021-11-20 15:19:31'),
(15, '17', 'Usefulness of a tab for senior citizens.', 'http://www.blog.355668.xyz/Admin/plugins/images/BlogImages/6199126c9a42b6199126c9a471.jpg', '<p>We all are living in a technological era where right from the moment we start our day till it ends, we are driven by a phenomenon called technology in every way. Each and every individual has made this technology a part of their life. While coming to millennials it becomes very easy to adapt themselves with the constant changes happening in this phenomenon. But the other side of the story tells us about how difficult it is for the senior citizens to understand these changes spontaneously. Still many elderly people are trying their best to become tech-savvy. So, if any such individual is willing to lead a life with this phenomenon, the best gift which we could give them is a smart device called Tablet.</p>\r\n\r\n<p>As per the recent trends, senior citizens have slowly moved towards the increased usage of smart-phones but face a few problems such as difficulty in usage, small size of the device making it tough to see the characters properly, difficulty in typing and so on. As they get older, the capacity to concentrate on something for a very long time becomes hard. Now, if we try to replace a smartphone with a tablet or just called as a tab, a lot of problems can be solved. It is similar to a smartphone but has a wider screen with a bigger keypad and good grip while holding the device. Due to the wider screen with a touchpad, it becomes convenient for them to view everything very clearly. Thus, this increases their efficiency in terms of knowing the technology.</p>\r\n\r\n<p>Though it has a wider screen than a phone, it is not really very heavy rather it is extremely portable. All the features that a smartphone provides is available in a tablet too. Another advantage a tablet portrays is that it has low maintenance because it has a longer battery life and is more durable than other devices. Also, there are very low chances of a virus attack in a tablet as compared to other gadgets. There are free versions of a few expensive software&rsquo;s which are provided exclusive for using in a tablet. So by covering all these features, we can say that tablets can be really useful for a senior citizen than using a smartphone wherein both the gadgets are priced at the same level.</p>\r\n', 1, '2021-11-20 15:21:16'),
(16, '17', 'Useful smartphone applications for senior citizens', 'http://www.blog.355668.xyz/Admin/plugins/images/BlogImages/619912c1a07fb619912c1a0840.jpg', '<p>The usage of smartphone has increased rapidly during the recent times. The main reason for extensive usage of a smartphone is the user-friendly features that it provides. But apart from that, it is due to different types of innovative applications that have been emerging off late, which prompts an individual to extend his usage. The advantage that these applications provide is that the individuals are able to relate the idea of the application with their daily life requirements. By this, we can understand that applications are designed as per the need of any user. Now, when we come to a specialised group of people who would like to have a technologically strong lifestyle but has a lot of limitations in making use of the trending gadgets actually require specific applications which can fulfil all their needs. That is for a senior citizen, specially designed versions of an application are required. Now let us see such special applications and software&rsquo;s which are in use in India.</p>\r\n\r\n<p>Health and fitness related apps</p>\r\n\r\n<ul>\r\n	<li>MedWatcher &ndash; This app is basically a reminder where proper timings of medicines intake, exercise and related routine can be scheduled.</li>\r\n	<li>HealthifyMe &ndash; This app serves to help its users by providing customized diet plans, exercise routine, calorie counter and expert advice round the clock.</li>\r\n	<li>WebMD &ndash; This app helps the senior citizens to know the status of their health if they suspect any new change in their body&rsquo;s function by finding out whether those could be the symptoms of a possible disease or condition with the help of experienced medical experts.</li>\r\n	<li>Dozee &ndash; This is a very unique application which can be downloaded into a smartphone and used along with a small device called dozee. When this device is placed below the mattress, it helps us to know how efficiently our body is functioning based on our sleep vitals.</li>\r\n	<li>Google Fit &ndash; This application was introduced by Google wherein it helps the user to track his health and fitness according to the guidelines provided by the World Health Organisation. It helps track the level of workout a person is undergoing to meet the set target.</li>\r\n</ul>\r\n\r\n<p>And the list of health and fitness apps goes on.</p>\r\n\r\n<p>Apart from health and fitness, when we talk about entertainment for senior citizens, there are a few special applications, such as</p>\r\n\r\n<ul>\r\n	<li>WordBrain &ndash; This application helps the senior citizens to give some exercise to their brains by playing simple word building games.</li>\r\n	<li>Spotify &ndash; This is one of the most soughtafter music related application wherein a wide range of songs are listed and according to the preference, one can listen to them either by going for a free version or pay a monthly subscription. Also, podcasts are available which elevates the user experience to the next level.</li>\r\n	<li>Duolingo &ndash; Many elders may have a desire to do a lot of things which might be pending in their bucket list. It might be learning a new language too. For this, Duolingo I the best option because it provides an interactive platform to learn new languages easily.</li>\r\n	<li>Audible &ndash; Many people like to read books but due to circumstances may not be able to do so. For such people, audible is the best choice because if we cannot read books, we can use the audiobook through this app where we can listen to short audio clips that reads the book out.</li>\r\n	<li>Kindle &ndash; Few individuals may not be comfortable with audiobooks but prefer reading a book only. So, for them, kindle app or the kindle device will come into use where the users can read the books online. The advantage that can be attributed to a senior citizen is its feature such as font and space customization, screen brightness adjustment, VoiceView Screen reading etc.</li>\r\n</ul>\r\n\r\n<p>Other random apps useful for a senior citizen include</p>\r\n\r\n<ul>\r\n	<li>Magnifying glass with flashlight &ndash; This app helps the seniors to magnify any object by simply using the mobile camera along with a flashlight for better visibility.</li>\r\n	<li>Find my iPhone &ndash; This app is suitable for an iPhone user wherein it can be downloaded into another android device. This application helps us to locate our iPhone when it is lost or misplaced even if it is switched off. It helps us track down the device easily.</li>\r\n	<li>Mint &ndash; This application is useful for a finance enthusiast who would always like to keep a track on the financial changes in the market on a regular basis.</li>\r\n</ul>\r\n\r\n<p>There are many more such applications specially designed for senior citizens which will help them alleviate their lifestyle with the support of technology.</p>\r\n', 1, '2021-11-20 15:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Comment_ID` int(11) NOT NULL,
  `CommentPost_ID` int(11) NOT NULL,
  `Comment_Author` varchar(255) NOT NULL,
  `Comment` text NOT NULL,
  `Comment_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `Homepage_Image` varchar(100) NOT NULL,
  `Homepage_Name` varchar(255) NOT NULL,
  `Homepage_Message` text NOT NULL,
  `Homepage_Description` text NOT NULL,
  `Homepage_Footer_Text` varchar(255) NOT NULL,
  `Homepage_Footer_Link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`Homepage_Image`, `Homepage_Name`, `Homepage_Message`, `Homepage_Description`, `Homepage_Footer_Text`, `Homepage_Footer_Link`) VALUES
('http://127.0.0.1/My-Blog/Admin/plugins/images/UserAvatar.jpg', 'Muhammad Muhaddis', 'Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with yours. ~Muhaddis', 'Welcome to the blog of CYBER SECURITY', 'Seniors Hive', 'https://www.muhaddis.info/');

-- --------------------------------------------------------

--
-- Table structure for table `post_visits`
--

CREATE TABLE `post_visits` (
  `Post_ID` int(11) NOT NULL,
  `Post_Visits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_visits`
--

INSERT INTO `post_visits` (`Post_ID`, `Post_Visits`) VALUES
(1, 20),
(2, 1),
(3, 28),
(4, 3),
(5, 7),
(6, 20),
(7, 8),
(8, 1),
(10, 2),
(11, 11),
(12, 10),
(13, 1),
(14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `Tag_ID` int(11) NOT NULL,
  `Tag` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`Tag_ID`, `Tag`) VALUES
(13, 'Retirement Home'),
(14, 'Health'),
(15, 'Enjoy'),
(16, 'Happy'),
(17, 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `total_visits`
--

CREATE TABLE `total_visits` (
  `Total_Visits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_visits`
--

INSERT INTO `total_visits` (`Total_Visits`) VALUES
(1070);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`Post_ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Comment_ID`);

--
-- Indexes for table `post_visits`
--
ALTER TABLE `post_visits`
  ADD PRIMARY KEY (`Post_ID`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`Tag_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `Post_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Comment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `Tag_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
