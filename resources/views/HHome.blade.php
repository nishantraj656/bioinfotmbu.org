@extends('Home')

@section('title', 'University Center of Bio-Informatics')

@section('script')
    <style>

    </style>
    <script>
    </script>
@endsection


@section('content')
<style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 50%;
        }
        </style>

<div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="http://www.bioinfotmbu.org/images/Bioinfo_Images/DCP_0076_small.jpg" alt="Los Angeles" width="1100" height="500">
             <div class="carousel-caption">
    <h3>Los Angeles</h3>
    <p>We had such a great time in LA!</p>
  </div>
        </div>
          <div class="carousel-item">
            <img src="http://www.bioinfotmbu.org/images/Bioinfo_Images/jail6.jpg" alt="Chicago" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="https://www.edgehill.ac.uk/news/files/2013/04/ProspDay4_0017.jpg" alt="New York" width="1100" height="500">
             <div class="carousel-caption">
    <h3>Los Angeles</h3>
    <p>We had such a great time in LA!</p>
  </div>
        </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      
      
  
  <div class="row bg-warning">
     <marquee> <strong>University Centre of Bioinformatics</strong></marquee>
</div>

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="row">
          <h4>University Centre of Bioinformatics</h4>
          <p>
              <b>University Centre of Bioinformatics</b>University Centre of Bioinformatics, T.M.
              Bhagalpur University, Bhagalpur was established in 2005 with motto to provide learning
              opportunity in the field of Bioinformatics and funded by Department of Biotechnology,
              Ministry of Science & Technology, Govt. of India under BTISNet (Biotechnology Information
              System Network) Program. <b>It is a matter of great pride for our University that this
                  is the only Sub-DIC Bioinformatics Centre in the State of Bihar.</b>
          </p>
          <br />
          <p>
              The Centre is an established unit of T.M. Bhagalpur University and it has been engaging
              regular classes on Computer application & Bioinformatics for Post & Under graduate
              students of Science faculty and also providing information to the teachers & research
              scholars for Ph.D. works since its inception. As such it has been acting as an integrated
              information hub on all aspects of biological researches and Data Mining of Biological
              resource. The Centre has developed adequate infrastructure with good dry lab which
              has been availed by the teachers, staffs & students of this University. About 150-200
              users are taking benefit of it in a month. The Centre has also its own research
              activities on different aspects of Plant Sciences& arranging workshop at local,
              regional & national level.
          </p>
          <br />
          <p>
              Centre has two air conditioned class room with Multimedia Projector and Computer
              Lab with 30 nodes in network. The Centre has also high speed broad band connection
              to all nodes in the dry lab. Library is reach with relevant books. Students are
              encouraged to take live project training program in different companies.
          </p>
          <br />

          
        </div>
      </div>
      <div class="col-sm-6">
          <img src="http://www.bioinfotmbu.org/images/Bioinfo_Images/123344_small.jpg" height="700px" style="width:100%; height:75%"/>
        </div>
    </div>  
    <div class="card">
      <div class="card-header bg-primary text-white" style="height:50px">
        <p class="card-title">From Director Desk</p>

      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-6">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <img src="http://www.bioinfotmbu.org/images/Bioinfo_Images/DCP_0057.jpg" style="width:100%;height:100%;"/>
                </div>
              </div>
              </div>
            </div>
            <div class="col-sm-6">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                        <p>
                            Bioinformatics is an interdisciplinary research area that relies on computational
                            and statistical methods to solve the biological problems. With the advancement of
                            high throughput technologies, biological experiments are generating huge amount
                            of data, ranging from genomic sequences to proteomics and drug designing. Biological
                            database systems, Biotechnology and Bioinformatics tools are required to manage
                            and analyze the biological data. It is also applied in different other fields like
                            Agriculture, Sequence analysis, Genome Annotation, Chemo Informatics, Molecular
                            Phylogenetic, Cancer, Motif & domain prediction, Database & software development,
                            DNA Bar-coding and 3D- structure prediction.
                        </p>
                        <br />
                        <p>
                            Bioinformatics would affect future dimension of biological research and keeping
                            this in view Bioinformatics division of Dept. of Biotechnology under the Ministry
                            of Science & Technology, Govt. of India has undertaken a very optimistic programme
                            to develop Bioinformatics Centre throughout the country under the BTIS-Net scheme.
                            All the Centres are supposed to gather biological information on broad base scale
                            and prepare information packages to be exchanged among the Centre and to be provided
                            people engaged in research, teaching and business especially pharmaceuticals and
                            agriculture.
                        </p>
                        <br />
                        <p>
                            University Centre of Bioinformatics, T.M. Bhagalpur University, Bhagalpur was established
                            in 2005 with motto to provide learning opportunity in the field of Bioinformatics
                            and funded by Department of Biotechnology, Ministry of Science & Technology, Govt.
                            of India under BTISNet (Biotechnology Information System Network) Program. <b>It is
                                a matter of great pride for our University that this is the only Sub-DIC Bioinformatics
                                Centre in the State of Bihar.</b>
                        </p>

                    </div>
                  </div>
                  </div>
                </div>
        </div>
  
        </div>
      
    </div>
  </div>


@endsection