DROP SCHEMA asw;

CREATE SCHEMA asw;

CREATE TABLE asw.users (
    uid INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(18) NOT NULL UNIQUE,
    upassword VARCHAR(30) NOT NULL
);

CREATE TABLE asw.home (
    hid INT PRIMARY KEY AUTO_INCREMENT,
    hbody LONGTEXT NOT NULL,
    hdate VARCHAR(12) NOT NULL,
    htime VARCHAR(18) NOT NULL
);

CREATE TABLE asw.resumef (
    resid INT PRIMARY KEY AUTO_INCREMENT,
    resfname VARCHAR(120) NOT NULL,
    resdate VARCHAR(12) NOT NULL,
    restime VARCHAR(18) NOT NULL
);

CREATE TABLE asw.majors (
    mid INT PRIMARY KEY AUTO_INCREMENT,
    mname VARCHAR(18) NOT NULL UNIQUE,
    mdate VARCHAR(12) NOT NULL,
    mtime VARCHAR(18) NOT NULL
);

CREATE TABLE asw.skills (
    ssid INT PRIMARY KEY AUTO_INCREMENT,
    sname VARCHAR(18) NOT NULL UNIQUE,
    sdate VARCHAR(12) NOT NULL,
    stime VARCHAR(18) NOT NULL,
    smid INT,
    FOREIGN KEY (smid)
        REFERENCES majors (mid)
);

CREATE TABLE asw.projects (
    prid INT PRIMARY KEY AUTO_INCREMENT,
    prtitle VARCHAR(80) NOT NULL UNIQUE,
    prbody VARCHAR(300),
    prmajors VARCHAR(120),
    prlanguages VARCHAR(80),
    prdate VARCHAR(12) NOT NULL,
    prtime VARCHAR(18) NOT NULL
);

CREATE TABLE asw.education (
    edid INT PRIMARY KEY AUTO_INCREMENT,
    degree VARCHAR(80) NOT NULL,
    university VARCHAR(80) NOT NULL,
    ulocation VARCHAR(80) NOT NULL,
    gdate VARCHAR(30) NOT NULL,
    eddate VARCHAR(12) NOT NULL,
    edtime VARCHAR(18) NOT NULL
);

CREATE TABLE asw.experience (
    exid INT PRIMARY KEY AUTO_INCREMENT,
    job VARCHAR(40) NOT NULL,
    company VARCHAR(80) NOT NULL,
    clocation VARCHAR(80) NOT NULL,
    enddate VARCHAR(30) NOT NULL,
    jdescription VARCHAR(120) NOT NULL,
    exdate VARCHAR(12) NOT NULL,
    extime VARCHAR(18) NOT NULL
);

CREATE TABLE asw.recommendations (
    recid INT PRIMARY KEY AUTO_INCREMENT,
    recfname VARCHAR(120) NOT NULL,
    recdate VARCHAR(12) NOT NULL,
    rectime VARCHAR(18) NOT NULL
);

CREATE TABLE asw.activities (
    acid INT PRIMARY KEY AUTO_INCREMENT,
    actitle VARCHAR(18) NOT NULL,
    acbody VARCHAR(120) NOT NULL,
    acdate VARCHAR(12) NOT NULL,
    actime VARCHAR(18) NOT NULL
);

CREATE TABLE asw.photo (
    phid INT PRIMARY KEY AUTO_INCREMENT,
    pfname VARCHAR(120) NOT NULL,
    phdate VARCHAR(12) NOT NULL,
    phtime VARCHAR(18) NOT NULL
);

CREATE TABLE asw.ame (
    amid INT PRIMARY KEY AUTO_INCREMENT,
    amtitle VARCHAR(80) NOT NULL,
    ambody VARCHAR(120) NOT NULL,
    amdate VARCHAR(12) NOT NULL,
    amtime VARCHAR(18) NOT NULL
);

CREATE TABLE asw.awebsite (
    awid INT PRIMARY KEY AUTO_INCREMENT,
    awbody LONGTEXT NOT NULL,
    awdate VARCHAR(12) NOT NULL,
    awtime VARCHAR(18) NOT NULL
);

CREATE TABLE asw.contact (
    cid INT PRIMARY KEY AUTO_INCREMENT,
    ctitle VARCHAR(80) NOT NULL,
    cbody VARCHAR(80) NOT NULL,
    cdate VARCHAR(12) NOT NULL,
    ctime VARCHAR(18) NOT NULL
);

CREATE TABLE asw.likes (
    lid INT PRIMARY KEY AUTO_INCREMENT,
    lflag INT DEFAULT 0
);
