# IIS Server Lab for Unsecure File Upload #
This is a really simple lab to test for a bypass technique of File Upload on IIS Server.<br>

<img src= "./images/lab.jpg" alt="description" style="border: 2px solid grey;">


The lab implement a file upload functionnality that save files on a folder with script execution disabled. All files are rendered in plain text.<br>
The bypass technique consists of uploading a web.config file that will override the configuration of the uploads folder. It will allow the execution of ASPX files, more particularly a webshell.<br><br>
I create this lab to get a better understanding of IIS Server and because I didn't find a lab for this bypass.<br>
I also note that the common webshells for this technique such as this one doesn't work on all versions of IIS Server.<br>
This lab was created on a Windows Server 2012 with IIS Server 6.2, I will develop another lab on a more recent version.<br> 

## Setup Windows Server ##
- On your Windows Server, go to "Add Roles and Features", click "Next" until "Server Roles" and choose Web Server (IIS).
- In "Features", display ".NET Framework 4.5 Features" and select "ASP.NET 4.5".
- In "Role Services", tick every "Common HTTP Features" and in "Application Development", select "ASP", "ASP.NET 4.5" (it will automatically select Extensibility and ISAPI modules).

## Setup IIS Server ##
- Open Explorer and go to "C:\inetpub\wwwroot", create a new folder called "FileUploadLab".
- If you use another name, be sure to change the savePath variable in upload.aspx line 6 !
- Copy upload.aspx and web.config inside and create a new folder called "uploads".
- Go to Tools/IIS Manager, right click on Sites, choose "Add Website", fill "Site name", choose you folder "FileUploadLab" in "Physical path", leave the rest blank and start the website.
- Stop the Default Web Site by opening "Sites" then "Default Web Site" and stop on the right.

## Exploit the lab ##
1. Try to upload legit files such as pictures or text file.
2. Try to upload script files such as test.aspx or a configuration file such as dummy-web.config and observe that all files are rendered as static file.
3. Upload web.config then access to test.aspx and observe that it is now executed.
4. You can then upload shell.aspx.<br>
5. The same thing can be done with ASHX file. First, clear the directory to prevent collision with multiple web.config files, rename ashx-web.config in web.config, upload it and upload shell.ashx.

 
