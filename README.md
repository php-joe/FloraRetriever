#Overview

FloraRetriever is an online tool to collect plant information from the field, submit it to a database, and report. This is a project for the 2015 backend web development course (weblab) sponsored by Front Range Community College.

#Who#
The project has 3 user types: observer, administrative, researcher. The observer needs to be able to submit data in as quick and efficient manner. The researcher needs to be able to retrieve the data in the excel format. The administrator needs to be able to access the database through a url.

#What#
##The observer is just gathering and submitting information: ##
* Unique ID: automated per transaction (alpha numeric)
* Date/Time: if current timestamp else ask for date/time
* Name: Text Field
* Plant Name: Text Field
* Soil Type: Dropbox (limited choices)
* Weather: Text field (requirement) - (api if time allows)
* Location: Text field (requirement) - (Geoscope api if time allows)
* Additional Notes: Text Field

##The researcher needs to be able to quickly access via clicking on a link. ##
* Export to excel file type
* This is secure

##The administrator needs access to the database##
* Phpmyadmin login information, database built to be easily understood
* This is secure

#How#
To complete this setup we will be using html, css, php, and mysql. The database will be mysql as that’s what the administrator is familiar with. We will first build the front-end to gather the information, then proceed with the backend to create the database, and finally link it together. If time allows we will use an additional third party API to streamline the process.

Use Case Scenarios are attached to user Joe1477 under Flora-Project.

###Team members on CFS are###

Carolyn Ownby, Joe Schumacher, Matt Dickal.

#Use Case#

###Use Case Submit Data###

* Use Case Name: Observer
* Submit Data	ID: 2
* Importance Level: High
* Primary Actor: 	
* Use Case Type: Essential

Stakeholders and Interests: 	
* Observer: person who wants to make note of our floral resources for the environment
* Administrator: Someone who wants to keep things organized
* Researches: People who want to use the data for scientific observations

Brief Description: This use case describes how user submits data

Trigger: Observer comes across flora/patterns they think are worth documenting
*Type:	External

Relationships:
* Association:		Observer
* Include:		Document flora information
* Extend:		N/A
* Generalization: 	N/A

Normal Flow of Events:

1.	Observer decides to document flora
2.	Observer picks up mobile device to document flora
3.	Observer fills out information deemed important for proper documentation
4.	Observer submits data

SubFlows:
* S-1: Current Documentation
	* 1 Data is timestamped for accuracy and ease
* S-2:  Outdate Documentation
	* Observer is given a Date/Time field.

Alternate/Exceptional Flows
N/A

###Use Case Data Retrieval###

* Use Case Name:	Researcher
* Submit Data	ID: 2
* Importance Level: High
* Primary Actor: Researcher
* Use Case Type: Essential

Stakeholders and Interests:
* Client: person who wants to make note of our floral resources for the environment
* Administrator: Someone who wants to keep things organized
* Researches: People who want to use the data for scientific observations

Brief Description: This use case describes researchers retrieve data

Trigger: Researcher wants to go through the data collected
	Type:	Internal

Relationships:
* Association:		Researcher
* Include:		Document flora information
* Extend:		N/A
* Generalization: 	N/A

Normal Flow of Events:

1.	Researcher logs in
2.	Researcher clicks link to download excel format document (they can sort/organize using Excel)


SubFlows:
* S-1:	 N/A

Alternate/Exceptional Flows
N/A


###Use Case Data Administrator###

* Use Case Name:	Administrator
* Submit Data	ID: 3
* Importance Level: High
* Primary Actor: Administrator
* Use Case Type: Essential

Stakeholders and Interests: 	
* Client: person who wants to make note of our floral resources for the environment
* Administrator: Someone who wants to keep things organized
* Researchers: People who want to use the data for scientific observations

Brief Description: This use case describes how the data administrator updates data

Trigger: Administrator needs to update data
* Type:	Internal

Relationships:
* Association:	Administrator
* Include:	 Database Update
* Extend:	N/A
* Generalization: 	N/A

Normal Flow of Events:

1.	Admin logins in through phpmyadmin
2.	Admin understands mysql, and can manipulate the data through phpmyadmin


SubFlows:
* S-1:	 N/A

Alternate/Exceptional Flows
N/A1
