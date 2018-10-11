<?php
/**
 * This component is a template part used on the Home Page with toggle children feature.  Use home-nodes-child.json for data
 *
 * @package wpbc_s
 */
?>
<div id="ts-networked-platform-child" class="networked-graph-child" style="width:100%; height: 880px"> </div>
<script>

var w = 990,
  h = 880,
  r = 60,
  root;

// Establish the dynamic force behavor of the nodes
var force = d3.layout.force()
    .size([w,h])
    .linkDistance([160])
    .charge((function(d){
        var charge = -500;
        if (d.index === 0) charge = 3 * charge;
        return charge;
      }))
    .gravity(-0.05)
    .on("tick", tick);

var svg = d3.select(".networked-graph-child").append("svg")
    .attr("width", w)
    .attr("height", h);

var link = svg.selectAll(".link"),
  node = svg.selectAll(".node"),
  text = svg.selectAll("text");

// Add the tooltip on mouseover using d3-tip plugin
var tip = d3.tip(".networked-graph")
    .attr("class", "d3-tip")
    .style("width", "330px")
    .direction(function(d) {
      return d.tipdirection;
    })
    .html(function(d) {
      return "<div class='node" + d.index + "'>" + d.tip + "</div>";
    });
svg.call(tip);



// Set data source and call the graph with update fnxn
d3.json("/wp-content/themes/Tradeshift/json/home-nodes-child.json", function(json) {
  root = json;
  flatten(root);
  setParents(root, null);
  collapseAll(root);
  root.children = root._children;
  root._children = null;
  update();
});

function update() {
  var nodes = flatten(root),
    links = d3.layout.tree().links(nodes);

  // Restart the force layout
  force
    .nodes(nodes)
    .links(links)
    .start();

    // Update the links
  link = link.data(links, function(d) { return d.target.id; });

    // Exit any old links.
    link.exit().remove();

    // Enter any new links.
  link.enter().insert("line", ".node")
    .attr("class", function(d) {
        return "link" + d.target.id ;})
    .attr("x1", function(d) { return d.source.x; })
    .attr("y1", function(d) { return d.source.y; })
    .attr("x2", function(d) { return d.target.x; })
    .attr("y2", function(d) { return d.target.y; });

  // Update the nodes
  node = node.data(nodes, function(d) { return d.id; });

  // Exit any old nodes.
  node.exit().remove();

    /* Draw the nodes themselves */
    node.enter().append("circle")
      .attr("id", function(d) {
        return "node" + d.id ;})
        .attr("class", "node")
        .attr("r", function(d) { return d.size; })
        .attr("cx", function(d) { return d.x; })
        .attr("cy", function(d) { return d.y; })
        .style("fill", function(d) { return d.color; })
        .style("cursor", "pointer")
        // .on("mouseover", tip.show)
        .on("mouseover", function(d) {
          d3.select(this).transition()
            .duration(200)
            .attr("r", function(d) {return d.size + 4});
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

    // Update the text on nodes
  text = text.data(nodes, function(d) { return d.id; });

  // Exit any old text nodes.
  text.exit().remove();

    /* Draw the text label */
  text.enter().append("text")
        .attr("id", function(d) {
        return "circleWrap" + d.id ;})
        .attr("fill", "#FFFFFF")
        .text(function(d) { return d.name; });

};

function tick() {
   link.attr("x1", function(d) { return d.source.x; })
        .attr("y1", function(d) { return d.source.y; })
        .attr("x2", function(d) { return d.target.x; })
        .attr("y2", function(d) { return d.target.y; })
   node.attr("cx", function(d) { return d.x = Math.max(r, Math.min(w - r, d.x)); })
      .attr("cy", function(d) { return d.y = Math.max(r, Math.min(h - r, d.y)); })
   text.attr("x", function(d) { return d.x; })
        .attr("y", function(d) { return d.y; });
    // d3plus.textwrap()
     //  .container("#circleWrap12")
     //  .draw();
};

// Toggle children on click
function click(d) {
  if (d3.event.defaultPrevented) return; // ignore drag
  if (d.id == 12) return null;
  if (d.id == 7 || d.id == 10) {
    window.open("//" + d.slug);
  } else {
    if (d.children) {
        collapseAll(d);
    } else {
        if (d._parent){
            d._parent.children.forEach(function(e){
                if (e != d){
                    collapseAll(e);
                }
            });
        }
      d.children = d._children;
      d._children = null;
    }
    update();
  }
};

// Returns a list of all nodes under the root
function flatten(root) {
  var nodes = [], i = 0;

  function recurse(node) {
    if (node.children) node.children.forEach(recurse);
    if (!node.id) node.id = ++i;
    nodes.push(node);
  }
  recurse(root);
  return nodes;
};

// Collapse all children except for parents
function collapseAll(d){
    if (d.children){
        d.children.forEach(collapseAll);
        d._children = d.children;
        d.children = null;
    }
    else if (d._children){
        d._children.forEach(collapseAll);
    }
};

// Let's define the parents
function setParents(d, p){
    d._parent = p;
  if (d.children) {
      d.children.forEach(function(e){ setParents(e,d);});
  } else if (d._children) {
      d._children.forEach(function(e){ setParents(e,d);});
  }
};

// Mouseover
function mouseoverNode() {
  d3.select(this).transition()
    .duration(750)
    .attr("r", function(d) {return d.size + 3});
}

</script>

