<html>
  <head>
    <title>Xianyi's Homepage</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <table  width="100%" >
      <tr>
    <td><h1>Zhang Xianyi</h1></td>
    
      
	<!-- <td><a href="#software">Software Packages</a></td> -->
	<!-- <td><a href="#publication">Publications</a></td> -->

	<td align="right"><a href="index_cn.php"><p>中文版</p></a></td>
      </tr>
    </table>
      <p>I'm a research associate at <a href="http://www.rdcps.ac.cn">Laboratory of Parallel Software and Computational Science, ISCAS</a>. Meanwhile, I'm a Ph.D. student and my supervisor is <a href="http://www.rdcps.ac.cn/~zyq">Dr. Zhang Yunquan</a>. My research interests focus on performance tuning of parallel software and GPU computing.</p>
    <p><b>Email</b>: xianyi (at) iscas (dot) ac (dot) cn</p>
    <hr>
    <h2 id="work">Work Experience</h2>
    <ul>
      <li><p>1/2010–present, Research Associate, Institute of Software, Chinese Academy of Sciences, Beijing, China</p></li>
      <li><p>7/2007–12/2009, Engineer, Institute of Software, Chinese Academy of Sciences, Beijing, China</p></li>
    </ul>
    <hr>
    <h2 id="project">Projects</h2>
    <ul>
      <li><p>2009.1-present, Research and Development of Compiler System and Toolchain for Domestic CPU (No.2009ZX01036-001-002), National S&ampT Major Projects: Core Electronic Devices, High-end General Chips and Fundamental Software, Institute of Software, Chinese Academy of Sciences</p></li>
      <li><p>2008.1-present, Sub-project: High Performance LC-MS-based  Protein Quantification Software Package, the Knowledge Innovation Program of the Chinese Academy of Sciences (No.KGCX1-YW-13), Institute of Software ,Chinese Academy of Sciences</p></li>
      <li><p>2009.1-2010.11, Sub-project: Optimization of Linpack on GPGPU Cluster, supported by Ministry of Finance under the Grant No. ZDYZ2008-2, Institute of Software, Chinese Academy of Sciences. (<I>IPE Mole-8.5 obtained No.19 on Top500 June 2010 list.</I>)</p></li>
    </ul>
    <hr>
    <h2 id="software">Software Packages Developed</h2>
    <ul>
      <li><p><a href="http://xianyi.github.com/OpenBLAS">OpenBLAS</a></p></li>
      <p>OpenBLAS is an optimized BLAS library based on GotoBLAS2 1.13 BSD version. This library is under BSD License. Currently, we focus on tuning on ICT Loongson 3A MIPS64 CPU and fixing bugs on X86/X86_64 CPU. In the future, we will develop this library on new X86 CPU with AVX instructions.</p>
      <li><p><a href="http://www.rdcps.ac.cn/GOSpMV">GOSpMV</a></p></li>
      <p>Automatic tuning SpMV library on AMD Brook+</p>
      <li><p><a href="http://mz-analyzer.sourceforge.net">MZ-Analyzer</a></p></li>
      <p>MZ-Analyzer is a tool for visualization and analysis of multiple mass spectrometry data in 2D and 3D mode.</p>
    </ul>
    <hr>
    <h2 id="publication">Publications</h2>
    <ul>
      <li><p><B>Xianyi Zhang</B>,Yunquan Zhang, Xiangzheng Sun, Fangfang Liu, Shengfei Liu, Yuxin Tang, Yucheng Li, Automatic Performance Tuning of SpMV on GPGPU, HPC  Asia 2009.</p></li>
      <li><p>Jing Wang, Yunquan Zhang, <B>Xianyi Zhang</B>, Xiangzheng Sun, Zelin Hu, Sujun Li, Rong Zeng, "QuantWiz: A Parallel Software Package for LC-MS-based Label-Free Protein Quantification," pp.683-687, 2009 11th IEEE International Conference on High Performance Computing and Communications, Seoul, Korea June 25-June 27,2009.</p></li>
      <li><p>Wang Lei , Zhang Yunquan , <B>Zhang Xianyi</B>, Liu Fangfang, Accelerating Linpack Performance with Mixed Precision Algorithm on CPU+GPGPU Heterogeneous Cluster, 2010 10th IEEE International Conference on Computer and Information Technology, Bradford, UK, June 2010.</p></li>
      <li><p><B>Xianyi Zhang</B>, Yunquan Zhang, Early Linpack Performance Benchmarking on IPE Mole-8.5 Fermi GPU Cluster, GTC 2010, San Jose, CA, USA, Sep 2010. (poster)</p></li>
    </ul>
    <hr>
    <h2 id="education">Education</h2>
    <ul>
      <li><p>9/2010-present, Computer Software and Theory, Ph.D. student, Graduate University of Chinese Academy of Sciences, Beijing, China</p></li>
      <li><p>9/2005-7/2007, Computer Architecture, Dept. of Computer Science and Technology, Graduate School of Beijing Institute of Technology, M.E.</p></li>
      <li><p>9/2001-7/2005, Dept. of Computer Science and Technology, Beijing Institute of Technology, B.E.</p></li>
      </ul>
    <hr>
    <?php
// Change to the name of the file
$last_modified = filemtime("index.php");
// Display the results
// eg. Last modified Monday, 27th October, 2003 @ 02:59pm
print "Last modified " . date("l, dS F, Y @ h:ia", $last_modified) ;
?> 

  </body>
</html>
