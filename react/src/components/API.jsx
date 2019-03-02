import React, { Component, Fragment } from 'react';

class API extends Component {

    state = {
        data: {}
    }

    componentDidMount() {
        fetch('http://api.openweathermap.org/data/2.5/weather?id=625143&APPID=f39517e3deee296bc5983929899203f6')
            .then(res => res.json())
            .then(data => this.setWeather(data))
            .catch(error => error);
    }

    setWeather = (data) => {
        this.setState({ data });
    }

    render() {
        
        const { data } = this.state;
        console.log(data);
        const { name } = data;
        // console.log(data.main.temp);
        return (
            <Fragment>
                {data.main ? (
                    <span>{data.main.temp}</span>
                ) : <span>Loading...</span>}
                {/* {<div>{name}</div>} */}
                {/* {<div>{all}</div>} */}
                {/* {Object.keys(data).map(({ index , item }) =>
                    <div>{item}</div>
                )} */}
            </Fragment>
        );
    }

}

export default API;