// JS file for Rethink Business section of home page - without toggled children
function tsPlatform() {
  /* Establish the dynamic force behavor of the nodes */
  var force = d3.layout.force()
      .size([w,h])
      .linkDistance([260])
      .charge(-300)
      .gravity(-0.04);

  var svg = d3.select(".networked-graph")
    .append("svg")
      .attr("width", w)
      .attr("height", h);

  d3.json("/wp-content/themes/Tradeshift/json/home-nodes-md.json", function(error, graph) {
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
        .on("mousedown", function(d) {
            nodetipIndex = "nodetip" + d.index;
            // console.log(nodetipIndex);
            $('#' + nodetipIndex).modal();
          })
        // .on("click", click)
        .call(force.drag);

      node.append("image")
        .attr("xlink:href", function(d) {
            var imagePath = "https://tradeshift.com/wp-content/themes/Tradeshift/img/home/tsplatform-node" + d.index + ".png";
            return imagePath;
          })
        .attr("x",function(d) {
          if (d.index == 0) return "-165";
          if (d.index == 1) return "-68";
          if (d.index == 2) return "-68";
          if (d.index == 3) return "-66";
          if (d.index == 4) return "-66";
          })
        .attr("id",function(d) {
          if (d.index == 0) return "nodebubble0";
          if (d.index == 1) return "nodebubble1";
          if (d.index == 2) return "nodebubble2";
          if (d.index == 3) return "nodebubble3";
          if (d.index == 4) return "nodebubble4";
          })
        .attr("y",function(d) {
          if (d.index == 0) return "-165";
          if (d.index == 1) return "-68";
          if (d.index == 2) return "-68";
          if (d.index == 3) return "-66";
          if (d.index == 4) return "-66";
          })
        .attr("width", function(d) {
          if (d.index == 0) return "330";
          if (d.index == 1) return "136";
          if (d.index == 2) return "136";
          if (d.index == 3) return "132";
          if (d.index == 4) return "132";
        })
        .attr("height", function(d) {
          if (d.index == 0) return "330";
          if (d.index == 1) return "136";
          if (d.index == 2) return "136";
          if (d.index == 3) return "132";
          if (d.index == 4) return "132";
        });
      /* Run the Force effect */
      force.on("tick", function() {
         link.attr("x1", function(d) { return d.source.x; })
             .attr("y1", function(d) { return d.source.y; })
             .attr("x2", function(d) { return d.target.x; })
             .attr("y2", function(d) { return d.target.y; })
         node.attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });

         }); // End tick func

      function click(d) {
        if (d3.event.defaultPrevented) return; // ignore drag
        if (d.index == 0) {
            return null;
          } else {
            window.open("//" + d.slug, "_self");
        }
      }
  });
}
