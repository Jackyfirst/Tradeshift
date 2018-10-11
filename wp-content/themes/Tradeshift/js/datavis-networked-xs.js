// JS file for Rethink Business section of home page - without toggled children
function tsPlatform() {
/* Establish the dynamic force behavor of the nodes */
var force = d3.layout.force()
    .size([w,h])
    .linkDistance([130])
    .friction(.6)
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

d3.json("/wp-content/themes/Tradeshift/json/home-nodes-xs.json", function(error, graph) {
	if (error) throw error;
	force
      .nodes(graph.nodes)
      .links(graph.links)
      .start();

    /* Draw the lines */
    var link = svg.selectAll(".link")
		.data(graph.links)
		.enter()
		.append("line")
		.attr("class", "link")
		.style("stroke", function(d) { return d.color; })
		.style("stroke-width", "2");

    /* Draw the nodes */
    var node = svg.selectAll(".node")
        .data(graph.nodes)
        .enter()
        .append("g")
        .attr("class", "node")
        .attr("id", function(d) {
          return "node" + d.index;
          })
        .attr("data-toggle", "modal")
        .attr("data-target", function(d) {
             return "nodetip" + d.index;
        })
        .on("click", function(d) {
            nodetipIndex = "nodetip" + d.index;
            // console.log(nodetipIndex);
            $('#' + nodetipIndex).modal();
          })
        .on("mouseout", function(d) {
          nodetipIndex = "nodetip" + d.index;
            // console.log(nodetipIndex);
            $('#' + nodetipIndex).modal('hide');
          })
        .call(force.drag);

    node.append("image")
      .attr("xlink:href", function(d) {
          var imagePath = "https://tradeshift.com/wp-content/themes/Tradeshift/img/home/tsplatform-xs-node" + d.index + ".png";
          return imagePath;
        })
      .attr("id",function(d) {
        if (d.index == 0) return "nodebubble0";
        if (d.index == 1) return "nodebubble1";
        if (d.index == 2) return "nodebubble2";
        if (d.index == 3) return "nodebubble3";
        if (d.index == 4) return "nodebubble4";
        })
      .attr("x",function(d) {
        if (d.index == 0) return "-80";
        if (d.index != 0) return "-47";
        })
      .attr("y",function(d) {
        if (d.index == 0) return "-80";
        if (d.index != 0) return "-47";
        })
      .attr("width", function(d) {
        if (d.index == 0) return "160";
        if (d.index != 0) return "94";
      })
      .attr("height", function(d) {
        if (d.index == 0) return "160";
        if (d.index != 0) return "94";
      });
    /* Run the Force effect */
    force.on("tick", function() {
       link.attr("x1", function(d) { return d.source.x; })
           .attr("y1", function(d) { return d.source.y; })
           .attr("x2", function(d) { return d.target.x; })
           .attr("y2", function(d) { return d.target.y; })
       node.attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });

       }); // End tick func

});
}