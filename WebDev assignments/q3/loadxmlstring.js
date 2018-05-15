function loadXMLString(text) 
{
try //Internet Explorer
{
    xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
    xmlDoc.async="false";
    xmlDoc.loadXML(text);
    return (xmlDoc);
}
catch(e)
{
    try //Firefox, Mozilla, Opera, etc.
    {
	parser=new DOMParser();
	xmlDoc=parser.parseFromString(text,"text/xml");
	return(xmlDoc);
    }
    catch(e) {alert(e.message)}
    return(null);
}
}