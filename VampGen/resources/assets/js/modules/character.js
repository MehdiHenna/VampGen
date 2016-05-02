const React = require('react');
const ReactDom = require('react-dom');

class CharacterForms extends React.Component{
	constructor(){
		super();
		this.state = {character :[
			{id:'name', name: 'name', label:'Nom', type:'text'},{id:'nature', name:'nature', label:'Nature', type:'text'},
			{id:'demeanor', name: 'demeanor', label:'Attitude', type:'text'},{id:'sire', name:'sire', label:'Sire', type:'text'},
			{id:'chronicle', name: 'chronicle', label:'Chronique', type:'text'},{id:'concept', name:'concept', label:'Métier', type:'text'},
		]}
	}
	render(){
		let inputCharacter = this.state.character.map( character =>{
			return <Character key={character.id} character={character} />
		});
		return(
			<div className="container">
				<div className="center-aligned">
					<div className="segment attached top">
						<h2 className="header inverted">Générateur pour la création de personnage de vampire</h2>
					</div>
				</div>
				<div className="segment">
					<form action="" method="post" className="vg-form">
							{inputCharacter}
						<div className="center-aligned">
							<button type="submit" formAction="/character" className="vg-button">Suivant</button>
						</div>
					</form>
				</div>
			</div>
		);
	}
}


const Character = (props) => {
	return (
		<div className="vg-field">
			<input type={props.character.type} id={props.character.id} name={props.character.name} required autoComplete="off" />
			<label htmlFor={props.character.id} className="label-text">{props.character.label}</label>
		</div>
	);
}

ReactDom.render(
	<CharacterForms />,
	document.getElementById('container')
);