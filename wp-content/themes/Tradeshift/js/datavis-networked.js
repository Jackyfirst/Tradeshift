// JS file for Rethink Business section of home page - without toggled children

// var color = d3.scale.category20();

/* Establish the dynamic force behavor of the nodes */
var force = d3.layout.force()
    .size([w,h])
    .linkDistance([160])
    .charge((function(d){
        var charge = -400;
        if (d.index === 0) charge = 4 * charge;
        return charge;
    	}))
    .gravity(-0.05);

var svg = d3.select(".networked-graph")
	.append("svg")
    .attr("width", w)
    .attr("height", h);

/* Add the tooltip on mouseover */
var tip = d3.tip(".networked-graph")
    .attr("class", "d3-tip")
    .style("width", "220px")
    .offset([0,0])
    .direction(function(d) {
    	return d.tipdirection;
    })
    .html(function(d) {
    	return "<div class='node" + d.index + "'>" + d.tip + "</div>";
    })

svg.call(tip);


// queue()
//     .defer(d3.json, "/wp-content/themes/Tradeshift/json/home-nodes.json")
//     .defer(d3.json, "/wp-content/themes/Tradeshift/json/home-links.json")
//     .await(makeDiag);
d3.json("/wp-content/themes/Tradeshift/json/home-nodes.json", function(error, graph) {
	if (error) throw error;
	force
      .nodes(graph.nodes)
      .links(graph.links)
      .start();
	
    var link = svg.selectAll(".link")
		.data(graph.links)
		.enter()
		.append("line")
		.attr("class", "link")
		.style("stroke", function(d) { return d.color; })
		.style("stroke-width", "2");

    /* Draw the nodes themselves */
    var node = svg.selectAll(".node")
        .data(graph.nodes)
        .enter()
        .append("circle")
        .attr("id", function(d) {
        	return "node" + d.index ;})
        .attr("r", function(d) { return d.size; })
        .style("fill", function(d) { return d.color; })
        .style("cursor", "pointer")
        .on("mouseover", function(d) {
          d3.select(this).transition()
            .duration(200)
            .attr("r", function(d) {return d.size + 5});
          document.getElementById("initial-tip").style.display = "none";
          tip.show(d);

        })
        .on("mouseout", function(d) {
          d3.select(this).transition()
            .duration(200)
            .attr("r", function(d) {return d.size});
          tip.hide(d);
        })
        .on("click", click)
        .call(force.drag);

    /* Draw the text label */
	var text = svg.selectAll("text")
        .data(graph.nodes)
        .enter()
        .append("text")
        .attr("id", function(d) {
        	return "circleWrap" + d.index; })
        .attr("fill", "#FFFFFF")
        .style("text-transform", "uppercase")
        .style("pointer-events", "none")
        .attr("font-family", "Open Sans")
        .attr("font-size", "22px")
        .text(function(d) { return d.name; });

    /* Run the Force effect */
    force.on("tick", function() {
       link.attr("x1", function(d) { return d.source.x; })
            .attr("y1", function(d) { return d.source.y; })
            .attr("x2", function(d) { return d.target.x; })
            .attr("y2", function(d) { return d.target.y; })
       node.attr("cx", function(d) { return d.x; })
            .attr("cy", function(d) { return d.y; })
       text.attr("transform", function(d) {
       		if (d.index == 0) return "translate(" + d.x + "," + (d.y + 8) + ")";
       		if (d.index == 1 || d.index == 3 || d.index == 4) return "translate(" + (d.x - 20) + "," + (d.y + 8) + ")";
       		if (d.index == 2) return "translate(" + (d.x - 26) + "," + (d.y + 8) + ")";
         });
       }); // End tick func

    d3plus.textwrap()
		.container("#circleWrap0")
		.draw();

	// Toggle children on click
	function click(d) {
	  if (d3.event.defaultPrevented) return; // ignore drag
	  if (d.index == 0) {
	  		return null;
	  	} else {
	  		window.open("//" + d.slug, "_self");
	  }
	}
});
