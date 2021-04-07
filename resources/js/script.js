'use strict';
let components = {

    maskedinput: {
        selector: '[data-masked]',
        init: function(nodes) {
            nodes.forEach(function(node) {
                $(node).inputmask(node.getAttribute('data-masked'));
            });
        }
    }
};


function initComponent(component) {
    let stylesState = Promise.resolve()
        , scriptsState = Promise.resolve();
    component.state = 'load';
    if (component.styles) {
        stylesState = stylesState.then(makeAsync.bind(null, component.styles, includeStyles));
    }
    if (component.script) {
        scriptsState = scriptsState.then(makeSync.bind(null, component.script, includeScript));
    }
    if (component.dependencies) {
        scriptsState = scriptsState.then(makeSync.bind(null, component.dependencies, checkComponent));
    }
    if (component.init) {
        scriptsState = scriptsState.then(component.init.bind(null, component.nodes));
    }
    stylesState.then(function() {
        window.dispatchEvent(new Event(`${component.name}:readyStyles`));
    });
    scriptsState.then(function() {
        window.dispatchEvent(new Event(`${component.name}:readyScripts`));
        component.state = 'ready';
    });
    return {
        scriptsState: scriptsState,
        stylesState: stylesState
    };
}
function initComponents(components) {
    let stylesPromises = []
        , scriptsPromises = [];
    if (!window.components)
        window.components = components;
    for (let key in components) {
        let component = components[key];
        component.name = key;
        component.nodes = document.querySelectorAll(component.selector);
        if (component.styles && !(component.styles instanceof Array)) {
            component.styles = [component.styles];
        }
        if (component.script && !(component.script instanceof Array)) {
            component.script = [component.script];
        }
        if (component.dependencies && !(component.dependencies instanceof Array)) {
            component.dependencies = [component.dependencies];
        }
        if (component.nodes.length) {
            component.state = 'pending';
        } else {
            component.state = 'absent';
        }
    }

    //console.log(components);
    for (let key in components) {
        let component = components[key];

        if (component.state === 'pending') {
            let componentPromises = initComponent(component);
            // console.log(componentPromises.scriptsState);
            stylesPromises.push(componentPromises.stylesState);
            scriptsPromises.push(componentPromises.scriptsState);
        }
    }


    Promise.all(scriptsPromises).then(function() {
        window.dispatchEvent(new Event('components:ready'));
    });
    Promise.all(stylesPromises).then(function() {
        window.dispatchEvent(new Event('components:stylesReady'));
    });
}
window.addEventListener('load', function() {
    initComponents(components);
});







