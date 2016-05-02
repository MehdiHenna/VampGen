const React = require('react');
const ReactDom = require('react-dom');

class ClanForms extends React.Component{
	constructor(){
		super();
		this.state = {clan :[
				{id:'assamite', name:'clan', label:'Assamite', type:'radio'},{id:'brujah', name:'clan', label:'Brujah', type:'radio'},
				{id:'followersOfSet', name:'clan', label:'Disciple de Set', type:'radio'},{id:'gangrel', name:'clan', label:'Gangrel', type:'radio'},
				{id:'giovanni', name:'clan', label:'Giovanni', type:'radio'},{id:'lassombra', name:'clan', label:'Lassombra', type:'radio'},
				{id:'malkavien', name:'clan', label:'Malkavien', type:'radio'},{id:'nosferatu', name:'clan', label:'Nosferatu', type:'radio'},
				{id:'ravnos', name:'clan', label:'Ravnos', type:'radio'},{id:'toreador', name:'clan', label:'Toréador', type:'radio'},
				{id:'tremere', name:'clan', label:'Tremere', type:'radio'},{id:'tzimisce', name:'clan', label:'Tzimisce', type:'radio'},
				{id:'ventrue', name:'clan', label:'Ventrue', type:'radio'},
			],
			secte :[
				{id:'camarilla', name:'secte', label:'Camarilla', type:'radio'},
				{id:'sabat', name:'secte', label:'Sabat', type:'radio'},
				{id:'independant', name:'secte', label:'Independant', type:'radio'},
			]}
		}
	render(){
		let inputClan = this.state.clan.map( clan =>{
			return <Clan key={clan.id} clan={clan} />
		});
		let inputSecte = this.state.secte.map( secte =>{
			return <Secte key={secte.id} secte={secte} />
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
						<div className="column">
							<div className="vg-field">
								<p className="radio-list-title">Clans</p>
								{inputClan}
							</div>
							<div className="vg-field">
								<p class="radio-list-title">Sectes</p>
								{inputSecte}
							</div>
						</div>
						<div className="center-aligned">
							<button type="submit" formAction="/character" className="vg-button">Précédent</button>
							<button type="submit" formAction="/character" className="vg-button">Suivant</button>
						</div>
					</form>
				</div>
			</div>
		);
	}
}

const Clan = (props) => {
	return (
		<div className="radio-input">
			<input type={props.clan.type} id={props.clan.id} name={props.clan.name} required autoComplete="off" />
			<label htmlFor={props.clan.id}>{props.clan.label}</label>
		</div>
	);
}
const Secte = (props) => {
	return (
		<div className="radio-input">
			<input type={props.secte.type} id={props.secte.id} name={props.secte.name} required autoComplete="off" />
			<label htmlFor={props.secte.id}>{props.secte.label}</label>
		</div>
	);
}

ReactDom.render(
	<ClanForms />,
	document.getElementById('clan')
);