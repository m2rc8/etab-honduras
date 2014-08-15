graficoColumnas = function(ubicacion, datos, colorChosen, categoryChoosen) 
{
    this.tipo = 'columnas';
	this.currentDatasetChart = datos;
    this.zona = ubicacion;
	this.color = colorChosen;
	this.category = categoryChoosen;
	
    
    // Dibuja el gráfico
	var contexto=this;
    this.dibujar = function() 
	{
		var margin = {top: 50, right: 40, bottom: 75, left: 70},
		width = parseInt(d3.select('#'+this.zona+' .panel-body').style('width'), 10);		
		width  = width - margin.left - margin.right-50,
		barPadding = 1;
		var height=parseInt(d3.select('#'+this.zona+' .panel-body').style('height'), 10)-150;
		if ($('#' + zona + '_icon_maximizar').hasClass('glyphicon glyphicon-zoom-out'))
			height=height-50;
		if(height<300||height>width)
		height=width*.65;
		
		var xScale = d3.scale.ordinal()
			.domain(this.currentDatasetChart.map(function(d) 
			{
				return d.category;
			}))
			.rangeRoundBands([0, width], .1);
	
		var max_y=100;
		var meta=0;
		
		var long = $('#' + contexto.zona + ' .titulo_indicador').attr('data-unidad-medida');
		texto="";
		
		//El nivel máximo de la escala puede ser el mayor valor de la serie
		// o el mayor valor del rango, el usuario elige
		// se utiliza datasetPrincipal_bk por si se han aplicado filtros
		// Así no usará el máximo valor del filtro
		var datasetPrincipal_bk = JSON.parse($('#' + this.zona).attr('datasetPrincipal_bk'));
		max_yy = d3.max(datasetPrincipal_bk, function(d) 
		{
			return parseFloat(d.measure);
		});
		if(long=="%")
			texto="Porcentaje";
		
		if ($('#' + this.zona + ' .max_y') != null && $('#' + this.zona + ' .max_y').val() == 'rango_alertas')
			max_y = $('#' + this.zona + ' .titulo_indicador').attr('data-max_rango');
	
		if (parseFloat($('#' + this.zona + 'meta').attr("data-id"))>0)
		{
			meta=$('#' + this.zona + 'meta').attr("data-id");
			max_y = $('#' + this.zona + ' .titulo_indicador').attr('data-max_rango');
		}
		
		if(max_y<max_yy)
			max_y=max_yy;
		var yScale = d3.scale.linear()
			.domain([0, max_y])
			.range([height, 0]);
	
		var yAxis = d3.svg.axis().scale(yScale).orient("left").ticks(10);
		var xAxis = d3.svg.axis().scale(xScale).orient("bottom");
		
	
		$('#' + this.zona + ' .grafico').html('');
		
		var svg = d3.select("#" + contexto.zona + ' .grafico')
			.append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
			.append("g")
			.attr("id", "ChartPlot")
			.attr("transform", "translate(" + margin.left + "," + margin.top + ")");						
		
		svg.selectAll("rect").append("title")
			.text(function(d) 
			{
				return d.category + ": " + d.measure;
			});
				
		svg.append("g")
			.attr("class", "y axis")
			.style("font", "1em")						
			.call(yAxis);
			  
		svg.append("text")
			.attr("class","axis-label")
			.attr("transform", "rotate(0)")
			.attr("y", 0)
			.attr("x", 15)
			.attr("dy", "-2.2em")	  
			.text(long+" "+texto)
			.style("text-anchor", "end")
			.style("font-family", "arial")
			.style("font-size", "10pt");			
		    
		  
		svg.append("g")
			.attr("class", "x axis")
			.attr("transform", "translate(0," + height + ")")
			.call(xAxis)		  
			.selectAll("text")			
			.attr('x', 7).attr('y', 10)
			.attr('text-anchor', 'start')
			.attr('style', '')
			.style("font", "1em")
			.style("font-size", "10pt")
			.style("font-family", "arial")
			.attr("transform", "rotate(30)");
		
		var ylabel=$('#' + contexto.zona + ' .dimensiones option:selected').text();
		svg.append("text")
			.attr("class","axis-label")
			.attr("transform", "rotate(-90)")
			.attr("y", width+margin.left)
			.attr("x",-((height-margin.top)-ylabel.length))
			.attr("dy", "-42pt")	  
			.text(ylabel)
			.style("text-anchor", "end");
				
		svg.selectAll("rect")
			.data(this.currentDatasetChart)
			.enter()
			.append("rect")
			.attr("class", "bar")
			.attr("height",0)
			.attr("y",height)											
			.attr("x", function(d, i) 
			{
				return xScale(d.category);
		
			})
			.attr("width", xScale.rangeBand())			
			.transition().duration(500).delay(20)
			.ease("cubic-in-out")
			.attr("y", function(d) 
			{
				return yScale(parseFloat(d.measure));
			})
			.attr("height", function(d) 
			{
				return height - yScale(parseFloat(d.measure));
			})
			;								                 
		
		svg.selectAll(".axis line, .axis path")
			.style("fill", "none")
			.style("stroke", "#000")
			.style("font-family", "arial")
			.style("stroke-width", "1px");
		svg.selectAll("svg")
			.style("font-family", "arial");		
		var plot = svg
		.append("g")		 
		 
		plot.selectAll("text")
			.data(contexto.currentDatasetChart)
			.enter()
			.append("text")
			.attr("class","label_barra")
			.text(function(d) 
			{
				return number_format(d.measure,2);
			})			
			.attr('x', function(d,i){return (i)*(width/contexto.currentDatasetChart.length)+(width/contexto.currentDatasetChart.length)/2;})
			.attr('y',height)
			.transition().duration(500).delay(20)
			.attr('y', function(d){return (height-((height*d.measure)/max_y))-5})
			.attr('text-anchor', 'middle')
			.style("font-family", "arial")			
			.attr('font-size', function()
			{ 
				var size=(xScale.rangeBand()/6)<1 ? 1: (xScale.rangeBand()/6);
				if(size>12) size=16;
				if(size<4) size=0;
				return size;
			})
			.attr('fill', '#000');
		
		if(meta>0)
		{
			svg.append("line")
				.attr("x1", 5)
				.attr("y1", height-((height*meta)/max_y))
				.attr("x2", width)
				.attr("y2", height-((height*meta)/max_y))
				.attr("stroke-width", 1)
				.style("stroke-dasharray",("5","5"))
				.attr("stroke", "steelblue");	
		}
				
		svg.selectAll("rect").on("click", function(d, i) {
			descenderNivelDimension(contexto.zona, d.category);
		});
		
		if (this.color == null)
			svg.selectAll("rect").attr("fill", function(d, i) {
				//evaluar que this.color le corresponde
				return colores_alertas(contexto.zona, d.measure, i)
			});
		else
			svg.selectAll("rect").attr("fill", this.color);
	};
    this.ordenar = function(modo_orden, ordenar_por) 
	{        
        this.currentDatasetChart = ordenarArreglo(this.currentDatasetChart, ordenar_por, modo_orden);
        this.dibujar();
        $('#' + this.zona).attr('datasetPrincipal', JSON.stringify(this.currentDatasetChart));
    };	
}