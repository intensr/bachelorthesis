export default function(testpath) {

  return {

    isPath: function(testPath) {

      return (window.location.pathname === testPath)
        ?  true
        : false;
    }
  }
}
