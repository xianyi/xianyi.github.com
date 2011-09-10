<html>
  <head>
    <title>张先轶的主页</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <table  width="100%" >
      <tr>
    <td><h1>张先轶</h1></td>
	<td align="right"><a href="index.php">English Version</a></td>
      </tr>
    </table>    
    <p><a href="http://www.rdcps.ac.cn">中科院软件所并行软件与计算科学实验室</a>，助理研究员，博士在读，导师：<a href="http://www.rdcps.ac.cn/~zyq">张云泉</a>研究员<br/>
    <b>研究兴趣：</b>并行软件性能优化，GPU等异构加速计算<br/>
    <b>Email</b>: xianyi (at) iscas (dot) ac (dot) cn</p>

    <hr>
    <h2 id="work">工作经验</h2>
    <ul>
    <li><p>2010年1月-至今 中科院软件所，助理研究员</p></li>
    <li><p>2007年7月-2009年12月 中科院软件所，研究实习员</p></li>
    </ul>
    <hr>
    
    <h2 id="project">项目</h2>
    <ul>
      <li><p>2009.1-至今，核高基国家科技重大专项，“支持国产CPU的编译系统及工具链”(No. 2009ZX01036-001-002)，子课题：“国产CPU高性能多核数学库”，骨干，中科院软件所</p></li>
      <li><p>2009.1-2010.11 财政部国家重大科研装备研制项目“高效能低成本多尺度离散模拟超级计算应用系统”，支撑子课题“基于GPU机群的LINPACK软件包研制与优化” No.ZDYZ2008-2，骨干，中科院软件所</p></li>
      <li><p>2008.1-至今，子课题：高性能蛋白质定量分析软件包，中科院知识创新工程重大项目课题(No.KGCX1-YW-13)，参与，中科院软件所</p></li>
    </ul>
    <hr>
    <h2 id="software">开发的软件包</h2>
    <ul>
      <li><p><a href="http://xianyi.github.com/OpenBLAS">OpenBLAS</a></p></li>
      <p>OpenBLAS 是基于 GotoBLAS2 1.13 BSD 版本的高性能BLAS库. 当前主要工作为针对龙芯3A CPU的性能优化，修正在X86平台上的错误. 计划未来针对新X86 CPU（Intel SandyBridge等）进行优化。</p>
      <li><p><a href="http://www.rdcps.ac.cn/GOSpMV">GOSpMV</a></p></li>
      <p>基于AMD Brook+语言的SpMV自适应优化软件包</p>
      <li><p><a href="http://mz-analyzer.sourceforge.net">MZ-Analyzer</a></p></li>
      <p>MZ-Analyzer 是生物信息学领域中针对蛋白质质谱数据的显示和分析工具，包含2维和3维显示，标识肽段鉴定结果，手工定量等功能。</p>
    </ul>
    <hr>
    <h2 id="publication">文章</h2>
          <li><B>Xianyi Zhang</B>,Yunquan Zhang, Xiangzheng Sun, Fangfang Liu, Shengfei Liu, Yuxin Tang, Yucheng Li, Automatic Performance Tuning of SpMV on GPGPU, HPC  Asia 2009.</li>
      <li>Jing Wang, Yunquan Zhang, <B>Xianyi Zhang</B>, Xiangzheng Sun, Zelin Hu, Sujun Li, Rong Zeng, "QuantWiz: A Parallel Software Package for LC-MS-based Label-Free Protein Quantification," pp.683-687, 2009 11th IEEE International Conference on High Performance Computing and Communications, Seoul, Korea June 25-June 27,2009.</li>
    <li>胡泽林, 张云泉, 王靖, <B>张先轶</B>, P-QuantWiz: 一种基于质谱的并行非标记定量软件，计算机工程与科学，2009年11期</li>
    <li>程豪, 张云泉, <B>张先轶</B>，李玉成, CPU-GPU并行矩阵乘法的实现与性能分析, 计算机工程, 36卷, 13期, 2010</li>
      <li>Wang Lei , Zhang Yunquan , <B>Zhang Xianyi</B>, Liu Fangfang, Accelerating Linpack Performance with Mixed Precision Algorithm on CPU+GPGPU Heterogeneous Cluster, 2010 10th IEEE International Conference on Computer and Information Technology, Bradford, UK, June 2010.</li>
      <li><B>Xianyi Zhang</B>, Yunquan Zhang, Early Linpack Performance Benchmarking on IPE Mole-8.5 Fermi GPU Cluster, GTC 2010, San Jose, CA, USA, Sep 2010. (poster)</li>
    <hr>
    <h2 id="education">教育经历</h2>
    <ul>
      <li><p>2010年9月-至今，中科院研究生院，计算机软件与理论专业，博士生在读</p></li>
      <li><p>2005年9月-2007年7月，北京理工大学计算机科学工程系，计算机系统结构专业，硕士</p></li>
      <li><p>2001年9月-2005年7月，北京理工大学计算机科学工程系，本科</p></li>
      </ul>
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
