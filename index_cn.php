<html>
  <head>
    <title>张先轶的主页</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <table  width="80%" >
      <tr>
    <td><h1>张先轶</h1></td>
    
      
	<!-- <td><a href="#project">Projects</a></td> -->
	<!-- <td><a href="#publication">Publications</a></td> -->

	<td align="right"><a href="index.php">English Version</a></td>
      </tr>
    
    <tr><td><a href="http://www.rdcps.ac.cn">中科院软件所并行软件与计算科学实验室</a>，助理研究员，博士在读</td></tr>
    <tr><td><b>研究兴趣：</b>并行软件性能优化，GPU等异构加速计算</td></tr>
    <tr><td><p><b>Email</b>: xianyi (at) iscas (dot) ac (dot) cn</p></td></tr>
    </table>
    <hr>
    <h2 id="project">项目</h2>
    <ul>
      <li><p><a href="http://xianyi.github.com/OpenBLAS">OpenBLAS</a></p></li>
      <p>OpenBLAS 是基于 GotoBLAS2 1.13 BSD 版本的高性能BLAS库. 当前主要工作为针对龙芯3A CPU的性能优化，修正在X86平台上的错误. 计划未来针对新X86 CPU（Intel SandyBridge等）进行优化。</p>
    </ul>
    <h2>过往项目</h2>
    <ul>
      <li><p><a href="http://www.rdcps.ac.cn/GOSpMV">GOSpMV</a></p></li>
      <p>基于AMD Brook+语言的SpMV自适应优化软件包</p>
      <li><p><a href="http://mz-analyzer.sourceforge.net">MZ-Analyzer</a></p></li>
      <p>MZ-Analyzer 是生物信息学领域中针对蛋白质质谱数据的显示和分析工具，包含2维和3维显示，标识肽段鉴定结果，手工定量等功能。</p>
    </ul>
    <hr>
    <h2 id="publication">文章</h2>
    <hr>
    <?php
// Change to the name of the file
$last_modified = filemtime("index_cn.php");
// Display the results
// eg. Last modified Monday, 27th October, 2003 @ 02:59pm
print "Last modified " . date("l, dS F, Y @ h:ia", $last_modified) ;
?> 

  </body>
</html>
