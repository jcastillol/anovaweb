<template>
  <div class="hello">
     </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
  

  #menu{
      background-image: linear-gradient(to bottom right, red, yellow);
;
  }
 
  #components-layout-demo-basic {
    text-align: center;
  }
  #components-layout-demo-basic .ant-layout-header{
  background-image: linear-gradient(to bottom right, red, yellow);

        color: #fff;
  }
  #components-layout-demo-basic .ant-layout-footer {
    color: #fff;
  }
  #components-layout-demo-basic .ant-layout-footer {
    line-height: 1.5;
  }
  #components-layout-demo-basic .ant-layout-sider {
    color: #fff;
    line-height: 120px;
  }
  #components-layout-demo-basic .ant-layout-content {
    color: #fff;
    min-height: 120px;
    line-height: 120px;
  }
  #components-layout-demo-basic > .ant-layout {
    margin-bottom: 48px;
  }
  #components-layout-demo-basic > .ant-layout:last-child {
    margin: 0;
  }
</style>