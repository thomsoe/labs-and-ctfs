<%@ Page Language="C#" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<script runat="server">
    string savePath = @"C:\inetpub\wwwroot\FileUploadLab\uploads\";
    protected void UploadButton_Click(object sender, EventArgs e)
    {
        HashSet<string> allowedExtensions = new HashSet<string>(StringComparer.OrdinalIgnoreCase)
        {
            ".jpg", ".png", ".gif"
        };

        if (FileUpload1.HasFile)
        {
            int fileSize = FileUpload1.PostedFile.ContentLength;
            string fileName = Server.HtmlEncode(FileUpload1.FileName);
            string extension = System.IO.Path.GetExtension(fileName);

            savePath += fileName;

            FileUpload1.SaveAs(savePath);

            string fileUrl = "/uploads/" + fileName;
            UploadLink.Text = "You can view it ";
            UploadHyperLink.NavigateUrl = fileUrl;
            UploadHyperLink.Text = "here";
            UploadHyperLink.Visible = true;

            if (allowedExtensions.Contains(extension))
            {
                UploadStatusLabel.Text = "Your file was uploaded successfully.";
            }
            else
            {
                UploadStatusLabel.Text = "It seems that your file is not a picture. <br />Anyway, you won't be able to do anything with it.";
            }
        }
        else
        {
            UploadStatusLabel.Text = "You did not specify a file to upload.";
        }
    }

    protected void ClearUploads_Click(object sender, EventArgs e)
    {
        string uploadFolder = savePath;

        try
        {
            string[] files = System.IO.Directory.GetFiles(uploadFolder);
            foreach (string file in files)
            {
                System.IO.File.Delete(file);
            }
            UploadStatusLabel.Text = "Uploads cleared successfully.";
        }
        catch (Exception ex)
        {
            UploadStatusLabel.Text = "An error occurred while clearing uploads.";
        }
    }
</script>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>File Upload</title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <h4>Select a file to upload:</h4>
            <asp:FileUpload id="FileUpload1" runat="server" />
            <br/><br/>
            <asp:Button id="UploadButton" Text="Upload file" OnClick="UploadButton_Click" runat="server" />
            <hr />
            <asp:Label id="UploadStatusLabel" runat="server"></asp:Label>
            <br/>
            <asp:Label id="UploadLink" runat="server"></asp:Label>
            <asp:HyperLink ID="UploadHyperLink" runat="server" Visible="false" Target="_blank"></asp:HyperLink>
            <hr />
            <asp:Button id="ClearButton" Text="Clear Uploads" OnClick="ClearUploads_Click" runat="server" />
        </div>
    </form>
</body>
</html>

