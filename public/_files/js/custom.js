_c.config = {

    title: (path, name, error, count) => {
        if (name === 'public') {
            name = '';
        }
        return name || "Dave's Photos";
    },

    popup: {
        click: 'zoom', // prev_next, next, zoom
    },

};
