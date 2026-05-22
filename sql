CREATE DATABASE auctionplatform;
\c auctionplatform;
CREATE table accounts(
id int,
username varchar(32) NOT NULL,
email varchar(40) NOT NULL,
password char(60) NOT NULL,
admin boolean DEFAULT false,
banned boolean DEFAULT false,
verifiedEmail boolean DEFAULT false,
loginToken char(128),
PRIMARY KEY(id)
);

CREATE table categories(
id int,
name varchar(32),
parentCategory int references categories(id),
PRIMARY KEY(id)
);

CREATE table listings(
id int,
title varchar(64),
description text,
userid int references accounts(id),
startDate timestamp,
endDate timestamp,
active boolean,
currentBidHolder int references accounts(id),
PRIMARY KEY(id)
);

CREATE table review(
id int,
comment varchar(300),
thumbsUp boolean,
listing int references listings(id),
userid int references accounts(id),
PRIMARY KEY(id)
);

CREATE table bids(
id int,
amount money,
bidder int references accounts(id),
bidTime timestamp,
PRIMARY KEY(id)
);
