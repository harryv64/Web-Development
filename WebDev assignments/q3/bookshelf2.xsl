<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
  <h2>My Books</h2>
  <table border="1">
    <tr bgcolor="pink">
      <th style="text-align:left">Author</th>
      <th style="text-align:left">Title</th>
	  <th style="text-align:left">Publisher</th>
	  <th style="text-align:left">Publisher Date</th>
	  <th style="text-align:left">Description</th>
	  <th style="text-align:left">Location</th>

    </tr>
    <xsl:for-each select="bookself/book">
      <xsl:sort select="publishdate" order="descending" />
    <tr>
      <td><xsl:value-of select="author"/></td>
	  <td><xsl:value-of select="title"/></td>
      <td><xsl:value-of select="publisher"/></td>
      <td><xsl:value-of select="publishdate"/></td>
      <td><xsl:value-of select="description"/></td>
      <td><xsl:value-of select="location"/></td>
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
