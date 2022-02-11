# Setting-Up Service Account
### 1. Browse to `https://console.cloud.google.com`
Open google cloud platform (GCP) console dashboard at [https://console.cloud.google.com](https://console.cloud.google.com).

### 2. Select Your Project
Select your existing project or you can create new project.

#### 2.1 Click the project name navigation

![Step 01](img/step-01.png)

#### 2.2 Search and choose project
If you want to create new project, click `New Project` button on the top-right side of the modal.

![Step 02](img/step-02.png)

### 3. Navigate to `Service Account` Page
After that, navigate to service account management page.
1. Open sidebar navigation menu
2. Hover to `IAM & Admin`
3. Tap `Service Accounts` menu

![Step 03](img/step-03.png)

![Step 04](img/step-04.png)

### 4. Create Service Account and Credentials

#### 4.1 Click `Create Service Account` Button
![Step 05](img/step-05.png)

#### 4.2 Follow the step to create the account

![Step 06](img/step-06.png)

#### 4.3 Generate secret to get credentials payload

Click `Manage Key` menu from service account management table

![Step 07](img/step-07.png)

Navigate to `Key` tab and click `ADD KEY` button

![Step 08](img/step-08.png)

Choose Key Type as JSON, then click Create. It will download json file which will be use as credentials in our app.

![Step 09](img/step-09.png)


### 6. Enable `Google Sheet API` Service

#### 6.1 Search `Google Sheet` as keyword at searching form

![Step 10](img/step-10.png)

#### 6.2 Select `Google Sheet API` from result list

![Step 11](img/step-11.png)

#### 6.3 Enable the API

![Step 12](img/step-12.png)

![Step 13](img/step-13.png)

### 7. Share your Sheet Document

#### 7.1 Back to Service Account Management Page

Copy the email of your service account

![Step 14](img/step-14.png)

#### 7.2 Open up your Sheet file then Share it

![Step 15](img/step-15.png)

![Step 16](img/step-16.png)